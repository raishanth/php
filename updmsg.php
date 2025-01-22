
<?Php require_once ("db.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ADD TELEPHONE NUMBERS </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="td.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function validate ()
	{
		var errExist = "false";
/*	
		if( isNaN(document.updform.oph.value) && errExist == "false")
		{
			alert("Office Phone No must be Numeric");
			document.updform.focus();
			errExist = "true";
		}
		if( isNaN(document.updform.fax.value) && errExist == "false")
		{
			alert("Office Fax No must be Numeric");
			document.updform.focus();
			errExist = "true";
		}
		if( isNaN(document.updform.resi.value) && errExist == "false")
		{
			alert("Resident Phone No must be Numeric");
			document.updform.focus();
			errExist = "true";
		}
		if( isNaN(document.updform.mph.value) && errExist == "false")
		{
			alert("Mobile Phone No must be Numeric");
			document.updform.focus();
			errExist = "true";
		}
*/		
		if(document.updform.sl.value=="" && errExist == "false")
		{
			alert("Check Serial No.!!! it should not be left blank");
			document.updform.focus();
			errExist = "true";
		}

		if(document.updform.name.value=="" && errExist == "false")
		{
			alert("Check Contract Name!!! it should not be left blank");
			document.updform.focus();
			errExist = "true";
		}

		
		if (errExist == "false")
		{
			var answer = confirm ("Are you sure to Update "+document.getElementById("name").value+"'s contact?")
			if (answer)
				document.updform.submit();
			else
				document.updform.focus();
		}
	}


</script>

</head>

<body bgcolor="#99FF99" class="bodyback">
<div id="Layer2" style="position:absolute; left:5px; top:45px; width:429px; height:294px; z-index:2" class="layerbor">

  <?Php
  	$radio=0;
	$slno=0;
	$name="none";
  	$slno =$_POST["slno"];
	$name =$_POST["name"];
	$radio =$_POST["radio1"];
	$i=0;
		
if ($slno=="" && $radio=="0")
{
	$sel = "select * from contact where sno='".$name."'";
	$res2=mysql_query ($sel);

}

if ($radio=="0" && $name=="none")
{
  	$sel = "select * from contact where sno='$slno'";
	$res2=mysql_query ($sel);

}

if ($slno=="0" && $name=="none")
{
  	$sel = "select * from contact where sno='$radio'";
	$res2=mysql_query ($sel);

}


?>
  <form name="updform" method="post" action="updresult.php">
  <table width="98%" height="272" border="0">
    <tr> 
      <td width="198" height="28" class="txt">S. No.</td>
      <td width="207" colspan="2"> <input name="sl" type="text" id="sl" class="txtbox" value="<?Php print mysql_result ($res2,$i,'sno'); ?>" disabled onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'"> 
      </td>
    </tr>
    <tr> 
      <td width="198" height="28" class="txt">Name</td>
      <td colspan="2"> <input name="name" type="text" id="name"class="txtbox" value="<?Php print mysql_result ($res2,$i,'name'); ?>" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" title="Modify Name"> 
      </td>
    </tr>
    <tr> 
      <td width="198" height="28" class="txt">Designation</td>
      <td colspan="2"> <input name="desig" type="text" id="desig" class="txtbox" value="<?Php print mysql_result ($res2,$i,'desig'); ?>" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" title="Modify Designation"> 
      </td>
    </tr>
	
	        <tr> 
        <td width="199" height="32" class="txt">Department</td>
        <td>&nbsp;</td>
        <td>

		
		<select name="dept" id="dept" onMouseOver="this.style.borderColor='#ff0000'" onmouseout="this.style.borderColor='blue'" class="optbox">
			<option value="<?Php print mysql_result ($res2,$i,'dept'); ?>" selected><?Php print mysql_result ($res2,$i,'dept'); ?></option>

		<?Php 
			
	   	$sel10 = "select * from dept order by sn asc";
		$res20=mysql_query ($sel10);
		$numrow1=mysql_numrows($res20);
		$i1=0;
	
	while ($i1<$numrow1)
	{ ?>
            <option value=" <?Php print mysql_result ($res20,$i1,'dept_name');	?> " > 
            <?php print mysql_result ($res20,$i1,'dept_name'); ?> </option>
            <?Php	$i1++;
	}
	?>
			
			</select></td>
      </tr>
	
    <tr> 
      <td width="198" height="28" class="txt">Department/Address</td>
      <td colspan="2"> <input name="deptadd" type="text" id="deptadd" class="txtbox" value="<?Php print mysql_result ($res2,$i,'deptadd'); ?>" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" title="Modify Department"> 
      </td>
    </tr>
    <tr> 
      <td width="198" height="28" class="txt">Office Phone No.</td>
      <td colspan="2"> <input name="oph" type="text" id="oph" class="txtbox" value="<?Php print mysql_result ($res2,$i,'offno'); ?>" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" title="Modify Office Phone No"> 
      </td>
    </tr>
    <tr> 
      <td width="198" height="28" class="txt">Fax No.</td>
      <td colspan="2"> <input name="fax" type="text" id="fax" class="txtbox" value="<?Php print mysql_result ($res2,$i,'faxno'); ?>" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" title="Modify Fax No"> 
      </td>
    </tr>
    <tr> 
      <td width="198" height="28" class="txt">Resident No.</td>
      <td colspan="2"> <input name="resi" type="text" id="resi" class="txtbox" value="<?Php print mysql_result ($res2,$i,'resino'); ?>" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" title="Modify Residence No"> 
      </td>
    </tr>
    <tr> 
      <td width="198" height="28" class="txt">Mobile No.</td>
      <td colspan="2"> <input name="mph" type="text" id="mph" class="txtbox" value="<?Php print mysql_result ($res2,$i,'mno'); ?>" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" title="Modify Mobile No"> 
      </td>
    </tr>
    <tr> 
      <td height="28"><input name="slno" type="hidden" id="resi1" class="txtbox" value="<?Php print mysql_result ($res2,$i,'sno'); ?>" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'"></td>
      <td colspan="2"><input name="upd" type="BUTTON" id="upd" value="MODIFY" class="printbutton" onClick="validate()" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'" title="Click here to Modify"></td>
    </tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:120px; top:7px; width:240px; height:27px; z-index:2"> 
  <font color="#000066" size="4" face="Bookman Old Style"> EDIT CONTACTS </font></div>

</form>
</body>
</html>