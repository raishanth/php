
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


//$uname= $_POST["un"];
//$pwd = $_POST["pwd"];



$sel = "select type from login where uname= '".$uname."' and pass = '".md5($pwd)."'";
//print ($sel);
$res=mysql_query ($sel);// or die ("not connected");

$numrow =mysql_numrows ($res);
if($numrow==1)
{
		//this select statement for cookies 
		$j=0;
		$sel1 = "select name from login where uname= '".$uname."'";
		$res1=mysql_query ($sel1);
		
		$name= mysql_result($res1,$j,"name"); 
		//print $name;
		session_id();
		$_SESSION['name']=$name;
		$strname=$_SESSION['name'];
		//print $strname;
		
		$photo3 = "select photo from login where uname= '".$uname."'";
		$photo1=mysql_query ($photo3);
		
		$photo2= mysql_result($photo1,0,"photo"); 
		//print $photo2;
		session_id();
		$_SESSION['photo']=$photo2;
		$strphoto=$_SESSION['photo'];
		//print $strphoto;
		
		$desig1 = "select desig from login where uname= '".$uname."'";
		$desig2=mysql_query ($desig1);
		
		$desig3= mysql_result($desig2,0,"desig"); 
		//print $desig3;
		session_id();
		$_SESSION['desig']=$desig3;
		$strdesig=$_SESSION['desig'];
		//print $strdesig;
		
		$init1 = "select init from login where uname= '".$uname."'";
		$init2=mysql_query ($init1);
		
		$init3= mysql_result($init2,0,"init"); 
		//print $init3;
		session_id();
		$_SESSION['init']=$init3;
		$strinit=$_SESSION['init'];
		//print $strinit;
		
		$uname1 = "select uname from login where uname= '".$uname."'";
		$uname2=mysql_query ($uname1);
		
		$uname3= mysql_result($uname2,0,"uname"); 
		//print $desig3;
		session_id();
		$_SESSION['uname']=$uname3;
		$struname=$_SESSION['uname'];
		//print $struname;	
			
	//this is for type select statement is from the top
	$i=0;
	$type= mysql_result($res,$i,'type'); 
	//print $type;
	
	if($type=='admin')
	{
		//header ("Location: http://localhost/td/auth.php");
		//include ("auth.php");
			
		include ("admin.php");
		

		
		//include ("welcome.php");
		//print $strname;

	}
	else
	{
		include ("user.php");
		
	}
	}
	else
	{
	include ("index.php");
	
	
	print "<div id='Layer2' style='position:absolute; left:660px; top:200px; width:392px; height:224px; z-index:2'>
	<font size=2 name= 'bookman old style' color = 'red'> <img src='images/Error.gif' alt='Invalid  user' width='21' height='22'> Wrong Username or Password <br>Enterned  Please login again ........</font> </div>";
	
	
	
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
