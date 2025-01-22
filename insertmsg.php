<?Php require_once ("db.php"); ?>

<html>
<head>
<title>ADD CONTRAT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?Php
//$sl =$_POST["sl"];
$name =$_POST["name"];
$desig=$_POST["desig"];
$dept=$_POST["dept"];
$deptadd=$_POST["deptadd"];
$opn=$_POST["opn"];
$faxno=$_POST["fax"];
$resino = $_POST["resi"];
$mno = $_POST["mno"];
$sel="select max(sno) from contact";
$res=@mysql_query($sel);

$i= mysql_result ($res,0);
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
$ins="insert into contact (sno,name,desig,dept,deptadd,offno,faxno,resino,mno) 
values('$j','".$name."','".$desig."','".$dept."','$deptadd','".$opn."','".$faxno."','".$resino."', '".$mno."')";
@mysql_query($ins);
include ("insert.php");

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
    <td height="20"><?Php print ("<font color = 'red' size = 4>Contract Added for : ".$name); //}?>
	</td>
  </tr>
</table>
</body>
</html>