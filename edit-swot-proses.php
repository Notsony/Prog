<?php
include_once('fix_mysql.inc.php');

ob_start();
include('koneksi.php');
if(isset($_POST['kode_swot']))
{
  $kode=$_POST['kode_swot'];
  echo "slam";
  if(isset($_POST['kirim']))
  {
  	echo "string";
  	$kode = $_POST['kode_swot'];
  	$kode2		= $_POST['kode_res'];
	$ket_swot   = $_POST['ket_swot'];
	$tipe_swot	= $_POST['tipe_swot'];
	$tahun = $_POST['tahun'];

	$querycoba = mysql_query("UPDATE swot SET kode_swot = '$kode', kode_res = '$kode2', ket_swot ='$ket_swot',  tipe_swot='$tipe_swot', tahun='$tahun' WHERE kode_swot ='$kode'")or die(mysql_error());

 	
 	$querynya = mysql_query($querycoba);
 	// print_r(mysql_query($querycoba));
 	// exit();
  header('Location:swot.php');
}
}  //update ends here
ob_end_flush();
?>
