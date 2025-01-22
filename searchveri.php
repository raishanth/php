<?Php require_once ("db.php"); ?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
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
width:780px;
height:280px;
overflow:auto;
}
</style>
<table width="21%" height="117" border="0">
  <tr> 
    <td height="21">&nbsp;</td>
  </tr>
  <tr> 
    <td height="21">&nbsp;</td>
  </tr>
  <tr> 
    <td height="21">&nbsp;</td>
  </tr>
  <tr> 
    <td height="21">&nbsp;</td>
  </tr>
  <tr> 
    <td height="21">&nbsp;</td>
  </tr>
</table>
<?php

$sersel =$_POST["sersel"];
$stxt=$_POST["stxt"];

if ($sersel=='all')
{

	$sel="select * from contact order by sno asc";
	$res=mysql_query ($sel);
	
	include ("search.php");
	$numrow=mysql_numrows($res);

	?>
	


 <div class="scroll" style="position:absolute; left:11px; top:170px; width:780px; height:280px; z-index:2">
 <table width="25%" bordercolor="#990000"  border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
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
			<td>  <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'sno'); ?></td> 
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
?> </TABLE> </div>
<?PHP	

if ($sersel=='name')
{

	$sel="select * from contact where name like'%".$stxt."%' order by sno asc";
	$res=mysql_query ($sel);
	
	include ("search.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	
	?>
	
 <div class="scroll" style="position:absolute; left:11px; top:170px; width:780px; height:280px; z-index:2">
 <table width="25%" bordercolor="#990000"  border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
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
			<td>  <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'sno'); ?></td> 
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

}
?> </TABLE> </div>
<?PHP	

if ($sersel=='desig')
{

	$sel="select * from contact where desig like'%".$stxt."%' order by sno asc";
	$res=mysql_query ($sel);
	
	include ("search.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	
	?>
 	
 <div class="scroll" style="position:absolute; left:11px; top:170px; width:780px; height:280px; z-index:2">
 <table width="25%" bordercolor="#990000"  border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
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
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	$j=$i+1;
		?>
			<td>  <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'sno'); ?></td> 
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
	

}
?> </TABLE>
<?PHP	

if ($sersel=='add')
{

	$sel="select * from contact where dept like'%".$stxt."%' order by sno asc";
	$res=mysql_query ($sel);
	
	include ("search.php");
	$numrow=mysql_numrows($res);

	if ($numrow > 0)
	{
	
	?>
	
 <div class="scroll" style="position:absolute; left:11px; top:170px; width:780px; height:280px; z-index:2">
 <table width="25%" bordercolor="#990000"  border="2" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
<tr>
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
	<?Php
	
		$i=0;
	
	while ($i<$numrow)
	{
	$j=$i+1;
		?>
			<td>  <font color="black" face="Bookman Old Style" size="-1"><?Php print mysql_result ($res,$i,'sno'); ?></td> 
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
	

}
?> </TABLE>
	



</body>
</html>