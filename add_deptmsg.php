<?Php require_once ("db.php"); ?>

<html>
<head>
<title>ADD DEPARTMENT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?Php
//$sl =$_POST["sl"];
$deptname =$_POST["deptname"];

$sel="select max(sn) from dept";
$res=@mysql_query($sel);

print $i= mysql_result ($res,0);

$j=$i+1;
/*
//Mobile No Check //
$mnocheck="select mno from contact where mno='$mno'";
$mnocheckqry=@mysql_query($mnocheck);
$mnocheckres= mysql_result($mnocheckqry,0,'mno'); 


if($mnocheckres==$mno)
{
include ("insert.php");
?>
			<script language="Javascript">
			
				alert ("This Mobile No is Already in our database")
				
			</script>
<?Php

}

else
{ */

$ins="insert into dept (sn,dept_name) values('$j','".$deptname."')";
@mysql_query($ins);
include ("add_dept.php");

?>
<table width="72%" height="345" border="0">
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
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
  </tr>
  <tr>
    <td height="20"><?Php print ("<font color = 'red' size = 4>Department name added for : ".$deptname); //}?>
	</td>
  </tr>
</table>
</body>
</html>