<?php
include_once('fix_mysql.inc.php');

ob_start();
include('koneksi.php');
if(isset($_POST['kode_res']))
{
  $kode=$_POST['kode_res'];
  echo "slam";
  if(isset($_POST['kirim']))
  {
  	echo "string";
  $kode = $_POST['kode_res'];
  $kode2 = $_POST['kode_prog'];
	$cawu = $_POST['cawu'];
	$jumlah = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$anggaran = $_POST['anggaran'];
	$b1 = $_POST['rel_bln1'];
	$b2 = $_POST['rel_bln2'];
	$b3 = $_POST['rel_bln3'];
	$b4 = $_POST['rel_bln4'];
	$b5 = $_POST['rel_bln5'];
	$b6 = $_POST['rel_bln6'];
	$b7 = $_POST['rel_bln7'];
	$b8 = $_POST['rel_bln8'];
	$b9 = $_POST['rel_bln9'];
	$b10 = $_POST['rel_bln10'];
	$b11 = $_POST['rel_bln11'];
	$b12 = $_POST['rel_bln12'];
	$tahun = $_POST['tahun'];

	$querycoba = mysql_query("UPDATE prog_kerja SET kode_res = '$kode', kode_prog = '$kode2', cawu='$cawu', jumlah='$jumlah', satuan= '$satuan', anggaran= '$anggaran', rel_bln1='$b1', rel_bln2='$b2',rel_bln3='$b3',rel_bln4='$b4',rel_bln5='$b5',rel_bln6='$b6',rel_bln7='$b7',rel_bln8='$b8',rel_bln9='$b9',rel_bln10='$b10',rel_bln11='$b11',
	rel_bln12='$b12', tahun='$tahun' WHERE kode_res='$kode'")or die(mysql_error());
 	
 	$querynya = mysql_query($querycoba);
 	// print_r(mysql_query($querycoba));
 	// exit();
  header('Location:index-admin.php');
}
}  //update ends here
ob_end_flush();
?>
