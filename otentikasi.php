<!--digunakan setelah login.php-->
<?php
include_once('fix_mysql.inc.php');
$username=$_POST['username'];
$password=$_POST['password'];
$akses=$_POST['akses'];
mysql_connect("localhost","root","");
mysql_select_db("pterpan16");
$hsl=mysql_query("select * from login where username='".$username."' and password='".$password."' and akses='".$akses."'");
if($brs=mysql_fetch_array($hsl)){
	setcookie("username",$username);
	setcookie("password",$password);
	setcookie("akses",$akses);
	
	switch ($akses) {
		case "admin":
			header ("Location:index-admin.php");
			break;
		case "pendidikan":
			header ("Location:index-pend.php");
			break;
		case "humas":
			header ("Location:index-humas.php");
			break;
		case "riset":
			header ("Location:index-riset.php");
			break;
	}
}
else
{
	header("Location:login.php?status=x");
}	



?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>