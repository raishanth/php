

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
<script language="JavaScript">
function passvalidate()
	{
		var errExist = "false";
	
		if (document.nuf.upwd.value!=document.nuf.ucpwd.value && errExist == "false")
		{
			alert("Password does not match please check !!!");
			document.nuf.focus();
			errExist = "true";
		}
		if( isNaN(document.nuf.contact.value) && errExist == "false")
		{
			alert("Contact No must be Numeric");
			document.nuf.focus();
			errExist = "true";
		}
		if(document.nuf.uname.value=="" && errExist == "false")
		{
			alert("Check Username!!! it should not be left blank");
			document.nuf.focus();
			errExist = "true";
		}
		
		if(document.nuf.upwd.value=="" && errExist == "false")
		{
			alert("Check Password!!! it should not be left blank");
			document.nuf.focus();
			errExist = "true";
		}
		
		if(document.nuf.ucpwd.value=="" && errExist == "false")
		{
			alert("Check Confirm Password!!! it should not be left blank");
			document.nuf.focus();
			errExist = "true";
		}
		if(document.nuf.name.value=="" && errExist == "false")
		{
			alert("Please enter User's Name!!! it should not be left blank");
			document.nuf.focus();
			errExist = "true";
		}
		if(document.nuf.init.options[0].selected && errExist == "false")
		{
			alert("Please Select Initial before your Name");
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


<div id="Layer1" style="position:absolute; left:14px; top:50px; width:548px; height:257px; z-index:1" class="layerbor">
  <table width="98%" height="242" border="0">
    <form name="nuf" method="post" action="signupmsg.php" enctype="multipart/form-data">
      <tr> 
        <td  width="170" height="32" class="txt">User Name</td>
        <td width="11">:</td>
        <td width="75">&nbsp;</td>
        <td colspan="2"> <input name="uname" type="text" id="uname" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'"> 
          <font color="#FF0000">&nbsp; * </font> </td>
      </tr>
      <tr> 
        <td width="170" height="32" class="txt">Password</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="upwd" type="password" id="upwd" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'"> 
          <font color="#FF0000">&nbsp; * </font> </td>
      </tr>
      <tr> 
        <td width="170" height="32" class="txt">Confirm Password</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="ucpwd" type="password" id="ucpwd" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'"> 
          <font color="#FF0000">&nbsp; * </font> </td>
      </tr>
      <tr> 
        <td width="170" height="32" class="txt">Name</td>
        <td>:</td>
        <td><select name="init" id="init" onMouseOver="this.style.borderColor='#ff0000'" onmouseout="this.style.borderColor='blue'" class="optbox">
			<option value="0" selected>Select.........</option>
			<option value="Mr." >MR.</option>
          	<option value="Mrs." >MRS.</option>
			<option value="Miss." >MISS.</option>
		 	<option value="Dr." >DR.</option>
			
			</select></td>
        <td colspan="2"> <input name="name" type="text" id="name" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'"> 
          <font color="#FF0000">&nbsp; * </font> </td>
      </tr>
      <tr> 
        <td width="170" height="32" class="txt">Designation</td>
        <td>: </td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="desig" type="text" id="desig" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'">        </td>
      </tr>
      <tr> 
        <td width="170" height="32" class="txt">Contact</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="contact" type="text" id="contact" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'">        </td>
      </tr>
      <tr>
        <td width="170" height="32" class="txt">Upload Photo</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td ><input type="file" name="fileup" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" onChange="preview(this)">&nbsp;</td>
      <tr> 
        <td width="170" height="32" class="txt">Type</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td><select name="type" id="type" onMouseOver="this.style.borderColor='#ff0000'" onmouseout="this.style.borderColor='blue'" class="optbox">
            <option value="admin">ADMIN</option>
            <option value="user" selected>USER</option>
          </select> </font><font color="#FF0000">&nbsp;</font></td>
      <tr> 
        <td width="170" height="32">&nbsp;</td>
        <td width="11">&nbsp;</td>
        <td width="75">&nbsp; </td>
			<td width="231"><input name="cuser" type="button" id="cuser2" value="Create" width="50" class="printbutton" onClick="passvalidate()" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'">        </td>
    </form>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:146px; top:13px; width:284px; height:27px; z-index:2"> 
  <font color="#000066" size="4" face="Bookman Old Style"> <u>CREATE NEW USER </u></font></div>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>
