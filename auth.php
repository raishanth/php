<?php session_start(); 


$uname1= $_POST["un"];
$pwd1 = $_POST["pwd"];
 
 //print $uname1;
 // print $pwd1;
 
 		session_id();
		$_SESSION['un']=$uname1;
		$uname=$_SESSION['un'];
		//print &uname;
		
		 session_id();
		$_SESSION['pwd2']=$pwd1;
		$pwd=$_SESSION['pwd2'];
		//print $pwd;
 
 ?>
 
<html>
<head>
<title>Loading...</title>

<link href="td.css" rel="stylesheet" type="text/css">

</head>
<body>
<body bgcolor="#99FF99" class="bodyback">
<center>
<p><br>
  <br>
  <br>
  <img src="images/tel.jpg"></p>
<p><br>
  <img src="images/loading.gif" width="139" height="25">
  <br>
  <br>
  
  <font face="verdana" size="5" color="purple">Authenticating your account. Please wait...</font>
  <br>
  <br>
</p>
<form name="frm" id="frm" action="loginveri.php" method="post">
<input type="hidden" name="p" value="E39B34FFC6EE2802">

</form>
<script> 
setTimeout("document.frm.submit();", 1000);
</script>

</body>
</html>

