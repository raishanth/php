<?Php require_once ("db.php"); ?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>
<?Php
//$name=$_POST["name"];
//$pwd=$_POST["pwd"];
//print $eqid;
$del = "delete from contact where sno=".$_POST["radio1"];
$del=@mysql_query ($del);
//print $del;


?>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

<?Php

include ("delete.php");
print ("<font color = 'red' size = 4>  Requested Contact is Deleted Successfully...");
?>


</body>
</html>