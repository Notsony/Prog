<?PHP
include_once('fix_mysql.inc.php');
$username = $_POST['username'];
$password = $_POST['password'];
$akses = $_POST['akses'];
/*
if(isset($_POST['hobby']))
	$total_hobby = implode(", ",$_POST['hobby']);
*/
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("pterpan16") or die("Database not found!!");
$query = mysql_query("INSERT INTO login VALUES('$username','$password','$akses')");

header("Location:login.php");

?>