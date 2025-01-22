<?Php
$db="td";
$user="root";
$pwd="12345678";
$host="localhost";
@mysql_connect($host,$user,$pwd) or die ("Connection failed");
mysql_select_db($db) or die ("Database not found");

?>