<?php session_start (); ?>
<?Php require_once ("db.php");

		$strphoto=$_SESSION['photo'];
?>

<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>LEFT</title>
<base target="main">
<link href="td.css" rel="stylesheet" type="text/css">

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
<SCRIPT LANGUAGE="JavaScript">
<!--

var da = (document.all) ? 1 : 0;
var pr = (window.print) ? 1 : 0;
var mac = (navigator.userAgent.indexOf("Mac") != -1);

function printPage(frame, arg) {
  if (frame == window) {
    printThis();
  } else {
    link = arg; // a global variable
    printFrame(frame);
  }
  return false;
}

function printThis() {
  if (pr) { // NS4, IE5
    window.print();
  } else if (da && !mac) { // IE4 (Windows)
    vbPrintPage();
  } else { // other browsers
    alert("Sorry, your browser doesn't support this feature.");
  }
}

function printFrame(frame) {
  if (pr && da) { // IE5
    frame.focus();
    window.print();
    link.focus();
  } else if (pr) { // NS4
    frame.print();
  } else if (da && !mac) { // IE4 (Windows)
    frame.focus();
    setTimeout("vbPrintPage(); link.focus();", 100);
  } else { // other browsers
    alert("Sorry, your browser doesn't support this feature.");
  }
}

if (da && !pr && !mac) with (document) {
  writeln('<OBJECT ID="WB" WIDTH="0" HEIGHT="0" CLASSID="clsid:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>');
  writeln('<' + 'SCRIPT LANGUAGE="VBScript">');
  writeln('Sub window_onunload');
  writeln('  On Error Resume Next');
  writeln('  Set WB = nothing');
  writeln('End Sub');
  writeln('Sub vbPrintPage');
  writeln('  OLECMDID_PRINT = 6');
  writeln('  OLECMDEXECOPT_DONTPROMPTUSER = 2');
  writeln('  OLECMDEXECOPT_PROMPTUSER = 1');
  writeln('  On Error Resume Next');
  writeln('  WB.ExecWB OLECMDID_PRINT, OLECMDEXECOPT_DONTPROMPTUSER');
  writeln('End Sub');
  writeln('<' + '/SCRIPT>');
}

// -->
</SCRIPT>
<link href="td.css" rel="stylesheet" type="text/css">

<script language="VBScript"> 

Sub myAlert(title, content)       
MsgBox content, 0, title 
End Sub 

</script> 


<script script type="text/javascript">
<!--

function remove()
	{
		myAlert("REMOVE PHOTO", "To remove your photo simply click on add photo..."); 
	}
	
function addpho()
	{
		myAlert ("ADD PHOTO","Add your photo.....")
	}
	
</script> 
</head>

<body bgcolor="#99FF99" class="bodyback" alink="#0000FF" vlink="#FF0000">

<div id="Layer1" style="position:absolute; left:6px; top:7px; width:170px; height:383px; z-index:1" class="floating-menu">
<input type="hidden" name="unamepass"value="<?Php print $unamepass=$_SESSION['un'];?>">

<?Php 

		session_id();
		$_SESSION['unp']=$unamepass;
		$unamepass1=$_SESSION['unp'];
?>

  <p>
  <p>
  <p>
  <p> 
    <?php
  	if($strphoto=='upimage/')
	{
		?>
    <a href="addpho.php" target="main" onClick="addpho()"><img src="upimage/addimg.gif" alt="Click here to add photo" width="75", height="85">    </a> 
    <?php

	}
	else
	{
		?>
    <a href="addpho.php" target="main" onClick="remove()"><img src="<?php print $strphoto; ?>" alt="Click here to Change photo" width="75", height="85">    </a> 
    <?php
		
	}		
		
		?>
  	<FONT SIZE='3' FACE=bookman old style color="#FFFF33">
	<a href="insert.php" target="main" title="Click here to Add Contract" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Add Contact </a>
    <a href="search.php" target="main" title="Click here to Search Contract" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Search Contact </a>
    <a href="print.php" target="main" title="Click here to take printout of Contract" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Report</a>
	<a href="changepass.php" target="main" title="Click to Change Password" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Change Password</a>
    <a href="download.php" target="main" title="Click here to Download files" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Download</a><a href="" onClick="return printPage(parent.main, this)" title="Click here to Print Contracts" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Click to Print Report </a>
    <a href="logout.php" target="_parent" title="Click here to Logout" onMouseOver="this.style.backgroundColor='yellow';"  onmouseout="this.style.backgroundColor='#99FF99';" STYLE="TEXT-DECORATION: NONE">Logout</a>	</font>
  <p>
    <marquee behavior="alternate" bgcolor="#000033" title="rajan" width="150">
    <font color="#FF00FF">Developed by Rajan </font>
    </marquee>
    <BR>
</div>

</body>

</html>
