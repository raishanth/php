
<?php session_start(); ?>
<?Php require_once ("db.php");

 		//session_id();
		//$_SESSION['un']=$uname1;
		$uname=$_SESSION['un'];
		//print $uname;
		
		
		//session_id();
		//$_SESSION['pwd2']=$pwd1;
		$pwd=$_SESSION['pwd2'];
		//print $pwd;
		
		$unamepass1=$_SESSION['unp'];//username called through session


$oldpwd= $_POST["oldpwd"];
$newpwd= $_POST["newpwd"];
//$pwd = $_POST["pwd"];



$sel = "select pass from login where uname= '".$unamepass1."' and pass = '".md5($oldpwd)."'";
//print ($sel);
$res=mysql_query ($sel);// or die ("not connected");
//print $res;
$numrow =mysql_numrows ($res);
if($numrow==1)
{
		$upd = "update login set pass='".md5($newpwd)."' where uname= '".$unamepass1."'";
		@mysql_query ($upd);
		include ("changepass.php");
		
		print "<div id='Layer2' style='position:absolute; left:25px; top:200px; width:392px; height:224px; z-index:2'>
	<font size=2 name= 'bookman old style' color = 'blue'> Your password changed sucessfully</font> </div>";
}
else
{
	include ("changepass.php");
	
	
	print "<div id='Layer2' style='position:absolute; left:25px; top:200px; width:392px; height:224px; z-index:2'>
	<font size=2 name= 'bookman old style' color = 'red'> <img src='images/Error.gif' alt='Invalid  user' width='21' height='22'> U entered invalid Old Password Please try again .......</font> </div>";
	
	
	
	?>
			<script language="Javascript">
			<!--
				//alert ("Invalid Username or Password enterned  please try again ........")
				//-->
		</script>
	
<?php

	}
	//print $uname;

//session_destroy();

?>
