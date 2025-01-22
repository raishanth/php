<?php session_start(); ?>
<?Php require_once ("db.php");

 		//session_id();
		//$_SESSION['un']=$uname1;
		//$uname=$_SESSION['un'];
		//print $uname;
		
		
		//session_id();
		//$_SESSION['pwd2']=$pwd1;
		//$pwd=$_SESSION['pwd2'];
		//print $pwd;
		
		//print $unamepass1=$_SESSION['unp'];//username called through session


		$unamepass1= $_POST["unamepass"];
//$newpwd= $_POST["newpwd"];
//$pwd = $_POST["pwd"];
?>
<html>
<head>
<title>Create New User</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body>
<br><br><br><br><br>
      <?Php
	
			
	
$target_path="upimage/";
$target_path1=$target_path .basename($_FILES['fileup']['name']);
$upload=move_uploaded_file($_FILES['fileup']['tmp_name'],$target_path1);

	$j=0;
	$sel2 = "select uname from login where uname='".$unamepass1."'";
	$res2=mysql_query ($sel2);
	$username= mysql_result($res2,$i,'uname'); 
	
	//print $username;

		
		$upd = "update login set photo='".$target_path1."' where uname= '".$unamepass1."'";
@mysql_query ($upd);

include ("addpho.php");

 print ("<font color = 'DARKBLUE' size = 4>Your Photo added/changed Sucessfully!!! please login again to take effect");
		

		$photo = "select photo from login where uname='".$unamepass1."'";
		$res2=mysql_query ($photo);
		$swphoto=mysql_result($res2,0,'photo'); 
		
			?> 
		<div id="Layer1" style="position:absolute; left:510px; top:53px; width:77px; height:86px; z-index:1">
		
		  <?php
		  //print $target_path1;
  	if($swphoto=='upimage/')
	{
		?>
			<img src="upimage/addimg.gif" alt="Your Photo removed " width="75", height="85"> 
		
		<?php

	}
	else
	{
		?>
			<img src="<?php print $swphoto; ?>" alt="Photo changed" width="75", height="85"> 
		<?php
		
	}		
		
		?>
		
</body>
</html>
