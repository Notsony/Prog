<?php
include_once('fix_mysql.inc.php');
$servername = "localhost";
$user = "root";
$pass = "";
$db_name = "pterpan16";

mysql_connect($servername, $user, $pass) or die (mysql_error());
mysql_select_db($db_name) or die (mysql_error());

?>