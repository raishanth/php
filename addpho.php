<?php session_start();
require_once ("db.php"); ?>

<html>
<head>
<title>Create New User</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
<link href="td.css" rel="stylesheet" type="text/css">

<script language="VBScript"> 

Sub 
myAlert(title, content)       
MsgBox content, 0, title 
End Sub 


</script> 


<script language="JavaScript">

function passvalidate()
	{
	
		var errExist = "false";
	
		if(document.nuf.fileup.value=="" && errExist == "false")
		{
				
			var answer = confirm ("Are you sure to remove your photo?")
			if (answer)
				document.nuf.submit();
			else
				alert("ok then browse your photo");
						document.nuf.focus();
						errExist = "true";
		}

		if (errExist == "false")
		{
			document.nuf.submit();
		}
	
	}

function imgvalidate()
		{
			  // width to resize large images to
			var maxWidth=100;
			  // height to resize large images to
			var maxHeight=100;
			  // valid file types
			var fileTypes=["bmp","gif","png","jpg","jpeg"];
			  // the id of the preview image tag
			var outImage="previewField";
			  // what to display when the image is not valid
			var defaultPic="spacer.gif";
			
			/***** DO NOT EDIT BELOW *****/
			
			
			  var source=what.value;
			  var ext=source.substring(source.lastIndexOf(".")+1,source.length).toLowerCase();
			  for (var i=0; i<fileTypes.length; i++) if (fileTypes[i]==ext) break;
			  globalPic=new Image();
			  if (i<fileTypes.length) globalPic.src=source;
			  else {
				globalPic.src=defaultPic;
				alert("THAT IS NOT A VALID IMAGE\nPlease load an image with an extention of one of the following:\n\n"+fileTypes.join(", "));
				
				document.nuf.reset();
				document.nuf.focus();
				return false;
			  }
			  setTimeout("applyChanges()",200);
		
			var globalPic;
			function applyChanges(){
			  var field=document.getElementById(outImage);
			  var x=parseInt(globalPic.width);
			  var y=parseInt(globalPic.height);
			  if (x>maxWidth) {
				y*=maxWidth/x;
				x=maxWidth;
			  }
			  if (y>maxHeight) {
				x*=maxHeight/y;
				y=maxHeight;
			  }
			  field.style.display=(x<1 || y<1)?"none":"";
			  field.src=globalPic.src;
			  field.width=x;
			  field.height=y;
			}	
		}	

		  // width to resize large images to
		var maxWidth=100;
		  // height to resize large images to
		var maxHeight=100;
		  // valid file types
		var fileTypes=["bmp","gif","png","jpg","jpeg"];
		  // the id of the preview image tag
		var outImage="previewField";
		  // what to display when the image is not valid
		var defaultPic="spacer.gif";
		
		/***** DO NOT EDIT BELOW *****/
		
		function preview(what){
		  var source=what.value;
		  var ext=source.substring(source.lastIndexOf(".")+1,source.length).toLowerCase();
		  for (var i=0; i<fileTypes.length; i++) if (fileTypes[i]==ext) break;
		  globalPic=new Image();
		  if (i<fileTypes.length) globalPic.src=source;
		  else {
			globalPic.src=defaultPic;
			alert("THAT IS NOT A VALID IMAGE\nPlease load an image with an extention of one of the following:\n\n"+fileTypes.join(", "));
			nuf.reset();
			nuf.focus();
			return false;
			
		  }
		  setTimeout("applyChanges()",200);
		}
		var globalPic;
		function applyChanges(){
		  var field=document.getElementById(outImage);
		  var x=parseInt(globalPic.width);
		  var y=parseInt(globalPic.height);
		  if (x>maxWidth) {
			y*=maxWidth/x;
			x=maxWidth;
		  }
		  if (y>maxHeight) {
			x*=maxHeight/y;
			y=maxHeight;
		  }
		  field.style.display=(x<1 || y<1)?"none":"";
		  field.src=globalPic.src;
		  field.width=x;
		  field.height=y;
	}


</script>

</head>

<body bgcolor="#99FF99" class="bodyback">


<div id="Layer1" style="position:absolute; left:14px; top:50px; width:441px; height:113px; z-index:1" class="layerbor">
  <table width="98%" height="98" border="0">
    <form name="nuf" method="post" action="addphomsg.php" enctype="multipart/form-data">
	
	<input type="hidden" name="unamepass"value="<?Php print $unamepass1=$_SESSION['un'];?>">
      <tr>
        <td width="170" height="36" class="txt">Upload Photo</td>
        <td>:</td>
        <td ><input type="file" name="fileup" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" onChange="preview(this)">&nbsp;</td>
      <tr>
        <td height="22">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      <tr> 
        <td height="32">&nbsp;</td>
        <td width="49">&nbsp;</td>
        <td width="272"><input name="cuser" type="button" id="cuser2" value="ADD PHOTO" width="50" class="printbutton" onClick="passvalidate()" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'">        </td>
    </form>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:146px; top:13px; width:285px; height:27px; z-index:2"> 
  <font color="#000066" size="3" face="Bookman Old Style"> <u>ADD OR CHANGE PHOTO </u></font></div>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>
