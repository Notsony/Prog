<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	$kode		= $_POST['kode_prog'];
	$divisi		= $_POST['divisi'];
	$nama		= $_POST['nm_prog'];
	$indikator	= $_POST['ren_indikator'];
	$jumlah	= $_POST['ren_jumlah'];
	$satuan	= $_POST['ren_satuan'];
	$anggaran	= $_POST['ren_anggaran'];
	$b1	= $_POST['ren_bln1'];
	$b2	= $_POST['ren_bln2'];
	$b3	= $_POST['ren_bln3'];
	$b4	= $_POST['ren_bln4'];
	$b5	= $_POST['ren_bln5'];
	$b6	= $_POST['ren_bln6'];
	$b7	= $_POST['ren_bln7'];
	$b8	= $_POST['ren_bln8'];
	$b9	= $_POST['ren_bln9'];
	$b10	= $_POST['ren_bln10'];
	$b11	= $_POST['ren_bln11'];
	$b12	= $_POST['ren_bln12'];
	$tahun	= $_POST['tahun'];
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO prog_kerja VALUES('$kode', '$divisi', '$nama', '$indikator', '$jumlah', '$satuan', '$anggaran', '$b1', '$b2', '$b3', '$b4', '$b5', '$b6', '$b7', '$b8', '$b9', '$b10', '$b11', '$b12', '$tahun')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="index-admin.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>