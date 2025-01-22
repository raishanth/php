<?php session_start(); ?>
<?Php require_once ("db.php"); 

		$strphoto=$_SESSION['photo'];
		//print $strphoto;

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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?Php
	
$target_path="upimage/";
$target_path=$target_path .basename($_FILES['fileup']['name']);
$upload=move_uploaded_file($_FILES['fileup']['tmp_name'],$target_path);

	
$una =$_POST["uname"];
$pwd=$_POST["upwd"];
$init=$_POST["init"];
$name=$_POST["name"];
$desig=$_POST["desig"];
$contact=$_POST["contact"];
$type = $_POST["type"];
//print .$init;



	$j=0;
	$sel2 = "select uname from login where uname='".$una."'";
	$res2=mysql_query ($sel2);
	$username= mysql_result($res2,$i,'uname'); 
	//print $username;
	//print $una;
	
	if($una==$username)
	{
		include ("signup.php");
		print ("<font color = 'red' size = 4>Hellow : ".$name);
		print (" username ".$una." is already have allotted !!! please signup as a different user");


	}
	elseif($una!=$username)
	{
	
		$sel="select max(sno) from login";
		$res=@mysql_query($sel);

		$i= mysql_result ($res,0);
		$j=$i+1;

		$ins="insert into login (sno,uname,pass,init,name,desig,contact,type,photo) 
		values('$j','".$una."','".md5($pwd)."','$init','".$name."','".$desig."','".$contact."','$type', '".$target_path."')";
		$res=@mysql_query($ins);
		include ("signup.php");
		print ("<font color = 'darkblue' size = 4>Welcome: ".$name);
		print ("<font color = 'darkblue' size = 4>  Your username created as : ".$una);
		$photo = "select photo from login where uname='".$una."'";
		$res2=mysql_query ($photo);
		//print $s1=mysql_result($res2,0,'photo'); 
		
			?>
		<div id="Layer1" style="position:absolute; left:610px; top:53px; width:77px; height:86px; z-index:1">
		<?php 
		
			if(mysql_result($res2,0,'photo')=='upimage/')
			{
				?>
				 <img src="upimage/addimg.gif" alt="" width="75", height="85">
				<?php

			}
			else
			{
				?>
				<img src="<?php print mysql_result($res2,0,'photo'); ?>" alt="" width="75", height="85">
		<?php
		
			}	
	}
	?>
</body>
</html>
