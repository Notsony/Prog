<?php
include_once('fix_mysql.inc.php');
include "koneksi.php";
$kode = $_GET['kode_swot'];
$q = mysql_query("DELETE from swot where kode_swot ='$kode'");

header("location:swot.php");
?>