<?php
include_once('fix_mysql.inc.php');
include "koneksi.php";
$kode = $_GET['kode_res'];
$q = mysql_query("DELETE from realisasi where kode_res ='$kode'");

header("location:realisasi.php");
?>