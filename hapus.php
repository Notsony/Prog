<?php
include_once('fix_mysql.inc.php');
include "koneksi.php";
$kode = $_GET['kode_prog'];
$q = mysql_query("DELETE from prog_kerja where kode_prog ='$kode'");

header("location:index-admin.php");
?>