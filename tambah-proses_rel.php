<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	$kode		= $_POST['kode_res'];
	$kode_p     = $_POST['kode_prog'];
	$cawu		= $_POST['cawu'];
	$jumlah	= $_POST['jumlah'];
	$satuan	= $_POST['satuan'];
	$anggaran	= $_POST['anggaran'];
	$b1	= $_POST['rel_bln1'];
	$b2	= $_POST['rel_bln2'];
	$b3	= $_POST['rel_bln3'];
	$b4	= $_POST['rel_bln4'];
	$b5	= $_POST['rel_bln5'];
	$b6	= $_POST['rel_bln6'];
	$b7	= $_POST['rel_bln7'];
	$b8	= $_POST['rel_bln8'];
	$b9	= $_POST['rel_bln9'];
	$b10	= $_POST['rel_bln10'];
	$b11	= $_POST['rel_bln11'];
	$b12	= $_POST['rel_bln12'];
	$tahun	= $_POST['tahun'];
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO realisasi VALUES('$kode', '$kode_p', '$cawu', '$jumlah', '$satuan', '$anggaran', '$b1', '$b2', '$b3', '$b4', '$b5', '$b6', '$b7', '$b8', '$b9', '$b10', '$b11', '$b12', '$tahun')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="realisasi.php">Menuju Ke Tabel Realisasi</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah_rel.php?kode_prog=$kode_p">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>