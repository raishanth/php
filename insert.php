
<?Php require_once ("db.php"); ?>


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
		var textdesig = document.getElementById('desig').value;
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
    <form name="insf" method="post" action="insertmsg.php">
      <tr> 
        <td width="199" height="32" class="txt">Name </td>
        <td width="10">&nbsp;</td>
        <td colspan="2"> <input name="name" type="text" class="txtbox" id="name" title="Enter Your Name"  onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" onKeyPress="name1()" onKeyUp="name1()" maxlength="100" msgInfo="* required,,Please enter valid email id" value="<?Php print $name; ?>"> 
		<span style="color:#CC0933; font-weight:0; position:relative;" id="nameShow">0/100 characters</span>        </td>
      </tr>
      <tr> 
        <td width="199" height="32" class="txt">Designation</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="desig" type="text" class="txtbox" id="desig" title="Enter Designation"  onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" onKeyPress="desig1()" onKeyUp="desig1()" maxlength="100" value="<?Php print $desig; ?>"> 
		<span style="color:#CC0933; font-weight:0; position:relative;" id="desigShow">0/100 characters</span>  
        </td>
      </tr>

	        <tr> 
        <td width="199" height="32" class="txt">Department</td>
        <td>&nbsp;</td>
		
		  <?php 
	//$slno =$_POST["slno"];
   	$sel = "select * from dept order by sn asc";
	$res2=mysql_query ($sel);
	$numrow=mysql_numrows($res2);

?>

        <td><select name="dept" id="dept" onMouseOver="this.style.borderColor='#ff0000'" onmouseout="this.style.borderColor='blue'" class="optbox">
			<option value="0" selected>Select Department</option>
			
			 <?Php 
	
		$i=0;
	
	while ($i<$numrow)
	{ ?>
            <option value=" <?Php print mysql_result ($res2,$i,'dept_name');	?> " > 
            <?php print mysql_result ($res2,$i,'dept_name'); ?> </option>
            <?Php	$i++;
	}
	?>
	
			</select></td>
      </tr>
	  	  
	        <tr> 
        <td width="199" height="32" class="txt">Department/Address</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="deptadd" type="text" class="txtbox" id="deptadd" title="Enter Department or Address"  onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'"onKeyPress="dept1()" onKeyUp="dept1()" maxlength="100" value="<?Php print $dept; ?>"> 
		<span style="color:#CC0933; font-weight:0; position:relative;" id="deptShow">0/100 characters</span> 
        </td>
      </tr>
	  
	  
      <tr> 
        <td width="199" height="32" class="txt">Office Phone No.</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="opn" type="text" class="txtbox" id="opn" title="Enter Office Phone No"  onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" value="<?Php print $opn; ?>"> 
        </td>
      </tr>
      <tr> 
        <td width="199" height="32" class="txt">Fax No.</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="fax" type="text" class="txtbox" id="fax" title="Enter Fax No"  onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" value="<?Php print $fax; ?>"> 
        </td>
      </tr>
      <tr> 
        <td width="199" height="32" class="txt">Resident No.</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="resi" type="text" class="txtbox" id="resi" title="Enter Resident No"  onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" value="<?Php print $resi; ?>"> 
        </td>
      </tr>
      <tr> 
        <td width="199" height="32" class="txt">Mobile No.</td>
        <td>&nbsp;</td>
        <td colspan="2"> <input name="mno" type="text" class="txtbox" id="mno" title="Enter mobile No"  onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" value="<?Php print $mno; ?>"> 
        </td>
      </tr>

      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="433"> <input name="add" type="button" id="add" value="ADD" class="printbutton" onClick="validate()" title="Click here to Add"  onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'"> 
        </td>
    </form></tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:146px; top:13px; width:228px; height:27px; z-index:2">

 <font color="#000066" size="4" face="Bookman Old Style"> <u>ADD CONTACTS </font></div>
</body>
</html>
