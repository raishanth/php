<?php 
session_start(); session_destroy(); 

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
  
  <font face="verdana" size="5" color="purple">Please wait you have been loging out.....</font>
  <br>
  <br>
</p>
<form name="frm" id="frm" action="index.php" method="post">
<input type="hidden" name="p" value="E39B34FFC6EE2802">

</form>
<script> 
setTimeout("document.frm.submit();", 1000);
</script>

</body>
</html>

