
<?Php require_once ("db.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ADD TELEPHONE NUMBERS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="td.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="25%" height="139" border="0">
  <tr> 
    <td height="61">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>



</table>
<?Php
$sn =$_POST["slno"];
$name =$_POST["name"];
$desig=$_POST["desig"];
$dept=$_POST["dept"];
$deptadd=$_POST["deptadd"];
$oph=$_POST["oph"];
$fax=$_POST["fax"];
$resi=$_POST["resi"];
$mph=$_POST["mph"];

$upd = "update contact set name='" .$name."', desig='" .$desig."', dept='" .$dept."', deptadd='$deptadd',
offno='".$oph."', faxno='".$fax."', resino='".$resi."', mno='".$mph."' where sno= '$slno'";
@mysql_query ($upd);

include ("SerchUpd.php");

print ("<font color = 'DARKBLUE' size = 4>Your requested Serial No. ".$slno." Name : ".$name. " is Modified Sucessfully");


?>
</body>
</html>