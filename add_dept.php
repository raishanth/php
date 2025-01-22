<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ADD TELEPHONE NUMBERS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="td.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function validate ()
	{
		var errExist = "false";
/*
	
		if( isNaN(document.insf.opn.value) && errExist == "false")
		{
			alert("Office Phone No must be Numeric");
			document.insf.focus();
			errExist = "true";
		}
		if( isNaN(document.insf.fax.value) && errExist == "false")
		{
			alert("Office Fax No must be Numeric");
			document.insf.focus();
			errExist = "true";
		}
			if( isNaN(document.insf.resi.value) && errExist == "false")
		{
			alert("Resident Phone No must be Numeric");
			document.insf.focus();
			errExist = "true";
		}
				if( isNaN(document.insf.mno.value) && errExist == "false")
		{
			alert("Mobile Phone No must be Numeric");
			document.insf.focus();
			errExist = "true";
		}
*/
		if(document.insf.name.value=="" && errExist == "false")
		{
			alert("Check Contract Name!!! it should not be left blank");
			document.insf.focus();
			errExist = "true";
		}
		if (errExist == "false")
		{
			document.insf.submit();
		}
	
	}


</script>
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

<script language="JavaScript" type="text/JavaScript">
function name1()
	{
		var textname = document.getElementById('name').value;
		document.getElementById('nameShow').innerHTML = (0+textname.length) + "/100"+" characters"; 
	}
function desig1()
	{
		var textdesig = document.getElementById('deptname').value;
		document.getElementById('desigShow').innerHTML = (0+textdesig.length) + "/100"+" characters";  
	} 
	
function dept1()
	{
		var textdept = document.getElementById('dept').value;
		document.getElementById('deptShow').innerHTML = (0+textdept.length) + "/100"+" characters";  
	} 
	

	
</script>

</head>

<body bgcolor="#99FF99" class="bodyback">
<div id="Layer2" style="position:absolute; left:23px; top:53px; width:595px; height:280px; z-index:2" class="layerbor">
  <table width="656" height="94" border="0">
    <form name="insf" method="post" action="add_deptmsg.php">
      <tr> 
        <td width="199" height="32" class="txt">Department Name</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="deptname" type="text" class="txtbox" id="deptname" title="Enter Department Name"  onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" onKeyPress="desig1()" onKeyUp="desig1()" maxlength="100" value="<?Php print $desig; ?>"> 
		<span style="color:#CC0933; font-weight:0; position:relative;" id="desigShow">0/100 characters</span>  
        </td>
      </tr>

      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="433"> <input name="add" type="button" id="add" value="ADD DEPT" class="printbutton" onClick="validate()" title="Click here to Add"  onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'"> 
        </td>
    </form></tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:146px; top:13px; width:228px; height:27px; z-index:2">

 <font color="#000066" size="4" face="Bookman Old Style"> ADD DEPT </font></div>
</body>
</html>
