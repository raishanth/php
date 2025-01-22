<?Php require_once ("db.php"); ?>

<html>
<head>
<title>Print</title>
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
</head>

<body bgcolor="#99FF99" class="bodyback">

<table width="60%" border="0">
  <tr> 
    <td height="20" align="center" ><font color="black" face="Bookman Old Style" size="+1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>CONTACT 
      DETAILS</u></td>
  </tr>
  <tr>
    <td height="21" align="center" >&nbsp;</td>
  </tr>
</table>
<?php

$sersel =$_POST["sersel"];
$stxt=$_POST["stxt"];

if ($sersel=='all')
{

	$sel="select * from contact order by sno asc ";
	$res=mysql_query ($sel);
	
	//include ("printveri.php");
	$numrow=mysql_numrows($res);

	?>
<!-- <div id="Layer1" style="position:absolute; left:8px; top:57px; width:564px; height:90px; z-index:1"> -->
<table width="25%" bordercolor="#000000" border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">

<tr>
<th> <font color="black" face="Bookman Old Style" size="2"> S.No. </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Name </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Designation </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Department </th> 
 <th> <font color="black" face="Bookman Old Style" size="2">Department / Address </th> 
<th> <font color="black" face="Bookman Old Style" size="2"> Office No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Fax No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Resident No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Mobile No </th> </tr>
<tr>
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	$j=$i+1;
	?>
			<td>  <font color="black" face="Bookman Old Style" size="2"><?Php print $j; ?>  </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'name'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'desig'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'dept'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'deptadd'); ?> </td>
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'offno'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'faxno'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'resino'); ?> </td> 
			<td><font color="black" face="Bookman Old Style" size="2"> <?Php print mysql_result ($res,$i,'mno'); ?> </td> 
		 	</tr> 
		<?Php

		$i++;
	}
	

}
?> </TABLE> <!-- </div> -->
<?PHP	

if ($sersel=='name')
{

	$sel="select * from contact where name like'%".$stxt."%'";
	$res=mysql_query ($sel);
	
	//include ("printveri.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	?>
	

<table width="25%" bordercolor="#000000" border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
<th> <font color="black" face="Bookman Old Style" size="2"> S.No. </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Name </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Designation </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Department </th> 
      <th> <font color="black" face="Bookman Old Style" size="2">Department / 
        Address </th> 
<th> <font color="black" face="Bookman Old Style" size="2"> Office No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Fax No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Resident No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Mobile No </th> </tr>
<tr>
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	
	$j=$i+1;
		?>
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print $j; ?>  </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'name'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'desig'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'dept'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'deptadd'); ?> </td>
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'offno'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'faxno'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'resino'); ?> </td> 
			<td><font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'mno'); ?> </td> 
		 	</tr> 
		<?Php

		$i++;
		}
	}
	else
	{
		print ("<font color = 'red' size = 4>  No records available for : ".$stxt);
	}
	

}
?> </TABLE> 
<?PHP	

if ($sersel=='desig')
{

	$sel="select * from contact where desig like'%".$stxt."%'";
	$res=mysql_query ($sel);
	
	//include ("printveri.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	?>

<table width="25%" bordercolor="#000000" border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
<th> <font color="black" face="Bookman Old Style" size="2"> S.No. </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Name </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Designation </th>
<th> <font color="black" face="Bookman Old Style" size="2">Department </th>  
      <th> <font color="black" face="Bookman Old Style" size="2">Department / 
        Address </th> 
<th> <font color="black" face="Bookman Old Style" size="2"> Office No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Fax No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Resident No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Mobile No </th> </tr>
<tr>
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	$j=$i+1;
	?>
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print $j; ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'name'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'desig'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'dept'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'deptadd'); ?> </td>
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'offno'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'faxno'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'resino'); ?> </td> 
			<td><font color="black" face="Bookman Old Style" size="2"> <?Php print mysql_result ($res,$i,'mno'); ?> </td> 
		 	</tr> 
		<?Php

		$i++;
		}
	}
	else
	{
		print ("<font color = 'red' size = 4>  No records available for : ".$stxt);
	}
	

}
?> </TABLE> 
<?PHP	

if ($sersel=='add')
{

	$sel="select * from contact where dept like'%".$stxt."%'";
	$res=mysql_query ($sel);
	
	//include ("printveri.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	?>

<table width="25%" bordercolor="#000000" border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
<th> <font color="black" face="Bookman Old Style" size="2"> S.No. </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Name </th> 
<th> <font color="black" face="Bookman Old Style" size="2">Designation </th>
<th> <font color="black" face="Bookman Old Style" size="2">Department </th>  
      <th> <font color="black" face="Bookman Old Style" size="2">Department / 
        Address </th> 
<th> <font color="black" face="Bookman Old Style" size="2"> Office No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Fax No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Resident No </th>
<th> <font color="black" face="Bookman Old Style" size="2">Mobile No </th> </tr>
<tr>
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	$j=$i+1;
?>			<td>  <font color="black" face="Bookman Old Style" size="2"><?Php print $j; ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'name'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'desig'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'dept'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'deptadd'); ?> </td>
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'offno'); ?> </td> 
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'faxno'); ?> </td>  
			<td> <font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'resino'); ?> </td> 
			<td><font color="black" face="Bookman Old Style" size="2"><?Php print mysql_result ($res,$i,'mno'); ?> </td> 
		 	</tr> 
		<?Php

		$i++;
		}
	}
	else
	{
		print ("<font color = 'red' size = 4>  No records available for : ".$stxt);
	}
	

}
?> </TABLE> 
	
<br> <br>
<table width="68%" border="0">
  <tr>
    <td width="38%">&nbsp;</td>


  </tr>
</table>




</body>
</html>