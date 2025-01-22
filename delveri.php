<?Php require_once ("db.php"); ?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
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

<script language="VBScript"> 

Sub 
myAlert(title, content)       
MsgBox content, 0, title 
End Sub 


</script> 


<script language="JavaScript">

function alldel()
	{
		var answer = confirm ("Are you sure to DELETE this contact permanently?")
			if (answer)
				document.all2.submit();
			else
				document.all3.focus();	
	}

function namedel()
	{
		var answer = confirm ("Are you sure to DELETE this contact permanently?")
			if (answer)
				document.name.submit();
			else
				document.name.focus();
	}

function desigdel()
	{
		var answer = confirm ("Are you sure to DELETE this contact permanently?")
			if (answer)
				document.desig.submit();
			else
				document.desig.focus();
	}
	
function adddel()
	{
		var answer = confirm ("Are you sure to DELETE this contact permanently?")
			if (answer)
				document.add.submit();
			else
				document.add.focus();
	}

</script>

</head>

<body>
<style>
BODY
{
scrollbar-face-color: brown;
scrollbar-highlight-color: #454534;
scrollbar-3dlight-color: #252355;
scrollbar-darkshadow-color: #456547;
scrollbar-shadow-color: #974563;
scrollbar-arrow-color: #BFGF45;
scrollbar-track-color: #BN4W5;
}
div.scroll
{
width:700px;
height:300px;
overflow:auto;
}
</style>
<table width="25%" height="130" border="0">
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
</table>

<?php

$sersel =$_POST["sersel"];
$stxt=$_POST["stxt"];

if ($sersel=='all')
{

	$sel="select * from contact order by sno asc";
	$res=mysql_query ($sel);
	
	include ("delete.php");
	$numrow=mysql_numrows($res);

	?>
	

<form action="delrec.php" method="post" name="all2">
 <div>
 <table width="25%" bordercolor="#990000"  border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
<th> <font color="black" face="Bookman Old Style" size="-1">Opt to Delete </th>
<th> <font color="black" face="Bookman Old Style" size="-1"> S.No. </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Name </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Designation </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Department </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Department / Address </th> 
<th> <font color="black" face="Bookman Old Style" size="-1"> Office No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Fax No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Resident No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Mobile No </th> 
 </tr>
<tr>
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	$j=$i+1;
		?>
			<td><font color="black" face="Bookman Old Style" size="-1">
			<input name="radio1" type="radio" value= "<?Php print mysql_result ($res,$i,'sno'); ?>">
			</td>		
			<td>  <font color="black" face="Bookman Old Style" size="-1"><?Php print $j; ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'name'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'desig'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'dept'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'deptadd'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'offno'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'faxno'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'resino'); ?> </td> 
			<td><font color="black" face="Bookman Old Style" size="-1"> <?Php print mysql_result ($res,$i,'mno'); ?> </td> 

		 	</tr> 
		<?Php

		$i++;
	}
	?>
	</TABLE>  </div>
	<br> <br>
<table width="68%" border="0">
  <tr>
    <td width="38%">&nbsp;</td>
    <td width="62%"><input name="all3" type="button" value="DELETE" class="printbutton" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'" onClick="alldel()"></td>
  </tr>
</table></form>
<?Php
}
?> 



<?PHP	

if ($sersel=='name')
{

	$sel="select * from contact where name like'%".$stxt."%' and sno";
	$res=mysql_query ($sel);
	
	include ("delete.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	?>
	
<form action="delrec.php" method="post" name="name">
 <div>
 <table width="25%" bordercolor="#990000"  border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
<th> <font color="black" face="Bookman Old Style" size="-1">Opt to Delete </th>
<th> <font color="black" face="Bookman Old Style" size="-1"> S.No. </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Name </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Designation </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Department </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Department / Address </th> 
<th> <font color="black" face="Bookman Old Style" size="-1"> Office No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Fax No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Resident No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Mobile No </th> 
 </tr>
<tr>
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
		$j=$i+1;
		?>
		
			<td><font color="black" face="Bookman Old Style" size="-1">
			<input name="radio1" type="radio" value= "<?Php print mysql_result ($res,$i,'sno'); ?>"></td>		
			<td>  <font color="black" face="Bookman Old Style" size="-1"><?Php print $j; ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'name'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'desig'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'dept'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'deptadd'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'offno'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'faxno'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'resino'); ?> </td> 
			<td><font color="black" face="Bookman Old Style" size="-1"> <?Php print mysql_result ($res,$i,'mno'); ?> </td> 

		 	</tr> 
		<?Php

		$i++;
		}
	}
	else
	{
		print ("<font color = 'red' size = 4>  No records available for : ".$stxt);
	}
	
	
	?>
	</TABLE> </div>
	<br> <br>
<table width="68%" border="0">
  <tr>
    <td width="38%">&nbsp;</td>
    <td width="62%"><input name="name" type="button" value="DELETE" class="printbutton" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'" onClick="namedel()"></td>
  </tr>
</table></form>
<?Php
}
?>

<?PHP	

if ($sersel=='desig')
{

	$sel="select * from contact where desig like'%".$stxt."%'  and sno";
	$res=mysql_query ($sel);
	
	include ("delete.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	
	?>
	<form action="delrec.php" method="post" name="desig">
 <div>
 <table width="25%" bordercolor="#990000"  border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
<th> <font color="black" face="Bookman Old Style" size="-1">Opt to Delete </th>
<th> <font color="black" face="Bookman Old Style" size="-1"> S.No. </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Name </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Designation </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Department </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Department / Address </th> 
<th> <font color="black" face="Bookman Old Style" size="-1"> Office No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Fax No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Resident No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Mobile No </th> 
 </tr>
<tr>
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	$j=$i+1;
		?>
		
			<td><font color="black" face="Bookman Old Style" size="-1">
			<input name="radio1" type="radio" value= "<?Php print mysql_result ($res,$i,'sno'); ?>"></td>		
		
			<td>  <font color="black" face="Bookman Old Style" size="-1"><?Php print $j; ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'name'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'desig'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'dept'); ?> </td>
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'deptadd'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'offno'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'faxno'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'resino'); ?> </td> 
			<td><font color="black" face="Bookman Old Style" size="-1"> <?Php print mysql_result ($res,$i,'mno'); ?> </td> 

		 	</tr> 
		<?Php

		$i++;
		}
	}
	else
	{
		print ("<font color = 'red' size = 4>  No records available for : ".$stxt);
	}
	
	?>
	</TABLE> </div>
	<br> <br>
<table width="68%" border="0">
  <tr>
    <td width="38%">&nbsp;</td>
    <td width="62%"><input name="desig" type="button" value="DELETE" class="printbutton" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'" onClick="desigdel()"></td>
  </tr>
</table></form>
<?Php
}
?>

<?PHP	

if ($sersel=='add')
{

	$sel="select * from contact where dept like'%".$stxt."%'  and sno";
	$res=mysql_query ($sel);
	
	include ("delete.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	
	?>
	<form action="delrec.php" method="post" name="add">
 <div>
 <table width="25%" bordercolor="#990000"  border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
<th> <font color="black" face="Bookman Old Style" size="-1">Opt to Delete </th> 
<th> <font color="black" face="Bookman Old Style" size="-1"> S.No. </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Name </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Designation </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Department </th> 
<th> <font color="black" face="Bookman Old Style" size="-1">Department / Address </th> 
<th> <font color="black" face="Bookman Old Style" size="-1"> Office No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Fax No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Resident No </th>
<th> <font color="black" face="Bookman Old Style" size="-1">Mobile No </th> 
</tr>
<tr>
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	$j=$i+1;
		?>
			<td><font color="black" face="Bookman Old Style" size="-1">
			<input name="radio1" type="radio" value= "<?Php print mysql_result ($res,$i,'sno'); ?>"></td>		
		
			<td>  <font color="black" face="Bookman Old Style" size="-1"><?Php print $j; ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'name'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'desig'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'dept'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'deptadd'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'offno'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'faxno'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'resino'); ?> </td> 
			<td><font color="black" face="Bookman Old Style" size="-1"> <?Php print mysql_result ($res,$i,'mno'); ?> </td> 

		 	</tr> 
		<?Php

		$i++;
		}
		
	}
	else
	{
		print ("<font color = 'red' size = 4>  No records available for : ".$stxt);
	}
	
	?>
	</TABLE> </div>
	<br> 
<table width="68%" border="0">
  <tr>
    <td width="38%">&nbsp;</td>
    <td width="62%"><input name="add" type="button" value="DELETE" class="printbutton" onMouseOver="this.style.borderColor='#FFFF00'" onMouseOut="this.style.borderColor='blue'" onClick="adddel()"></td>
  </tr>
</table></form>
<?Php
}
?>

</body>
</html>