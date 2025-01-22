
<?Php require_once ("db.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ADD TELEPHONE NUMBERS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="td.css" rel="stylesheet" type="text/css">

<script language="JavaScript">
function passvalidate()
	{
		var errExist = "false";
	
		if ((document.form1.slno.value=="") && (document.form1.name.options[0].selected) && (errExist == "false"))
		{
			alert("Check Both Fields are Blank !!! Fill any one field");
			document.form1.focus();
			errExist = "true";
		}

		if (errExist == "false")
		{
			document.form1.submit();
		}
	
	}

</script>




</head>

<body bgcolor="#99FF99" class="bodyback">

<div id="Layer2" style="position:absolute; left:84px; top:10px; width:268px; height:27px; z-index:2"> 
  <font color="#000066" size="4" face="Bookman Old Style"> <u>MODIFY CONTACTS </u></font></div> 

       <?php 
	//$slno =$_POST["slno"];
   	$sel = "select * from contact order by sno asc";
	$res2=mysql_query ($sel);
	$numrow=mysql_numrows($res2);

?>

<p>&nbsp;</p><form name="form1" method="post" action="updmsg.php">
<div id="Layer2" style="position:absolute; left:11px; top:52px; width:565px; height:129px; z-index:2" class="layerbor">
    <table width="553" border="0">
      <tr> 
        <td width="217" class="txt">Enter Serial Number</td>
        <td width="204"> <input type="text" name="slno" class="txtbox" onMouseOver="this.style.borderColor='#ff0000'" onMouseOut="this.style.borderColor='blue'" > 
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="txt">OR</td>
      </tr>
      <tr> 
        <td class="txt">Select Name</td>
        <td width="204"><select name="name" tabindex="15" size="1" style="font-size : 13; color : #FF00FF; font-family: bookman old style">
		    <option value="none" > </option>
            <?Php 
	
		$i=0;
	
	while ($i<$numrow)
	{ ?>
            <option value=" <?Php print mysql_result ($res2,$i,'sno');	?> " > 
            <?php print mysql_result ($res2,$i,'sno'); print (". "); print mysql_result ($res2,$i,'name'); print (", "); print mysql_result ($res2,$i,'desig');?> </option>
            <?Php	$i++;
	}
	?>
	
        </select></td>
      </tr>
      <tr> 

        <td>&nbsp; </td>
		<input name="radio1" type="hidden" value= "0">
		
		
        <td><input type="button" name="updser" value="SEARCH" class="printbutton" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'" onClick="passvalidate()" id="updser1"></td>
      </tr>
    </table>
  </div></form>
</body>
</html>
