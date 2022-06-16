<?php
include_once('fix_mysql.inc.php');

ob_start();
include('koneksi.php');
if(isset($_POST['kode_prog']))
{
  $kode=$_POST['kode_prog'];
  echo "slam";
  if(isset($_POST['kirim']))
  {
  	echo "string";
  $kode = $_POST['kode_prog'];
  $divisi = $_POST['divisi'];
	$nama = $_POST['nm_prog'];
	$indikator = $_POST['ren_indikator'];
	$jumlah = $_POST['ren_jumlah'];
	$satuan = $_POST['ren_satuan'];
	$anggaran = $_POST['ren_anggaran'];
	$b1 = $_POST['ren_bln1'];
	$b2 = $_POST['ren_bln2'];
	$b3 = $_POST['ren_bln3'];
	$b4 = $_POST['ren_bln4'];
	$b5 = $_POST['ren_bln5'];
	$b6 = $_POST['ren_bln6'];
	$b7 = $_POST['ren_bln7'];
	$b8 = $_POST['ren_bln8'];
	$b9 = $_POST['ren_bln9'];
	$b10 = $_POST['ren_bln10'];
	$b11 = $_POST['ren_bln11'];
	$b12 = $_POST['ren_bln12'];
	$tahun = $_POST['tahun'];

	$querycoba = mysql_query("UPDATE prog_kerja SET kode_prog = '$kode', divisi = '$divisi', nm_prog='$nama',ren_indikator='$indikator', ren_jumlah='$jumlah', ren_satuan= '$satuan', ren_anggaran= '$anggaran', ren_bln1='$b1', ren_bln2='$b2',ren_bln3='$b3',ren_bln4='$b4',ren_bln5='$b5',ren_bln6='$b6',ren_bln7='$b7',ren_bln8='$b8',ren_bln9='$b9',ren_bln10='$b10',ren_bln11='$b11',
	ren_bln12='$b12', tahun='$tahun' WHERE kode_prog='$kode'")or die(mysql_error());
 	
 	$querynya = mysql_query($querycoba);
 	// print_r(mysql_query($querycoba));
 	// exit();
  header('Location:index-admin.php');
}
}  //update ends here
ob_end_flush();
?>
