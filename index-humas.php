<!DOCTYPE html>
<html>
<head>
	<title>Program Kerja</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/W3.css">
</head>
<body>
	<!--<h2>Program Kerja</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>-->

	<!--NAVBAR-->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index-humas.php">HMSI</a></li>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="index-humas.php">Program Kerja <span class="sr-only">(current)</span></a></li>
			<li class><a href="laporan.php" target="_blank">Laporan <span class="sr-only">(current)</span></a></li>
			<!--<li class><a href="tambah.php">Tambah Program <span class="sr-only">(current)</span></a></li>
			<li class><a href="realisasi.php">Realisasi <span class="sr-only">(current)</span></a></li>
			<li class><a href="swot.php">Swot <span class="sr-only">(current)</span></a></li>-->
		  </ul>
		  <form class="navbar-form navbar-right" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Find</button>
		  </form>

		  <ul class="nav navbar-nav navbar-right">
			<li>
				<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span><?PHP
						if(isset($_POST['username']))
						echo "Halo, ".$_POST['username']."<br>";
						else
						echo "Halo, ".$_COOKIE['username']."<br>";
					?>
				</a>
			</li>
			<li><a href="logout.php">Logout</a></li>
		  </ul>

		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!--selesai-->
	<div class="col-md-12">
	
	<h2>Data Program Kerja</h2>
	<br/>
	
	<table class="w3-table-all w3-card-4" cellpadding="5" cellspacing="0" border="1">
		<tr class="w3-teal">
			<th>Kode Program</th>
			<th>Divisi</th>
			<th>Nama Program</th>
			<th>Rencana Indikator</th>
			<!--<th>EDIT</th>
			<th>HAPUS</th>
			<th style="background-color:#669999">Tambah Realisasi</th>-->
			<th>Hasil Realisasi</th>

			<!--<th rowspan="2">Kode Program</th>
			<th rowspan="2">Nama Program</th>
			<th rowspan="2">Rencana Indikator</th>
			<th rowspan="2">Rencana Jumlah</th>
			<th rowspan="2">Rencana Satuan</th>
			<th rowspan="2">Rencana Anggaran</th>
			<th colspan="12">Rencana Bulan</th>
            <th rowspan="2">Tahun</th>
			<th rowspan="2">EDIT</th>
			<th rowspan="2">HAPUS</th>-->
		</tr>
		<!--<tr>
				<th>Bln 1</th>
				<th>Bln 2</th>
				<th>Bln 3</th>
				<th>Bln 4</th>
				<th>Bln 5</th>
				<th>Bln 6</th>
				<th>Bln 7</th>
				<th>Bln 8</th>
				<th>Bln 9</th>
				<th>Bln 10</th>
				<th>Bln 11</th>
				<th>Bln 12</th>
		</tr>-->
		

		<?php
		include_once('fix_mysql.inc.php');
		//include file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table program kerja, ditampilkan semua
		$query = mysql_query("SELECT * FROM prog_kerja WHERE divisi='Humas'") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			//$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr style="height: 40px;">';
					//echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['kode_prog'].'</td>';		//menampilkan data kode program dari database
					echo '<td>'.$data['divisi'].'</td>';
					echo '<td>'.$data['nm_prog'].'</td>';		//menampilkan data nama program dari database
					echo '<td>'.$data['ren_indikator'].'</td>';

					/*echo '<td>'.$data['ren_indikator'].'</td>';	//menampilkan data rencana indikator dari database
					echo '<td>'.$data['ren_jumlah'].'</td>';	//menampilkan data rencana jumlah dari database
					echo '<td>'.$data['ren_satuan'].'</td>';	//menampilkan data rencana satuan dari database
					echo '<td>'.$data['ren_anggaran'].'</td>';	//menampilkan data rencana anggaran database
					echo '<td>'.$data['ren_bln1'].'</td>';		//menampilkan data rencana bulan 1 dari database
					echo '<td>'.$data['ren_bln2'].'</td>';		//menampilkan data rencana bulan 2 dari database
					echo '<td>'.$data['ren_bln3'].'</td>';		//menampilkan data rencana bulan 3 dari database
					echo '<td>'.$data['ren_bln4'].'</td>';		//menampilkan data rencana bulan 4 dari database
					echo '<td>'.$data['ren_bln5'].'</td>';		//menampilkan data rencana bulan 5 dari database
					echo '<td>'.$data['ren_bln6'].'</td>';		//menampilkan data rencana bulan 6 dari database
					echo '<td>'.$data['ren_bln7'].'</td>';		//menampilkan data rencana bulan 7 dari database
					echo '<td>'.$data['ren_bln8'].'</td>';		//menampilkan data rencana bulan 8 dari database
					echo '<td>'.$data['ren_bln9'].'</td>';		//menampilkan data rencana bulan 9 dari database
					echo '<td>'.$data['ren_bln10'].'</td>';		//menampilkan data rencana bulan 10 dari database
					echo '<td>'.$data['ren_bln11'].'</td>';		
					echo '<td>'.$data['ren_bln12'].'</td>';		
					echo '<td>'.$data['tahun'].'</td>';*/
					//echo '<td><a href='hapus.php?kode_prog=$c[kode_prog]'>Hapus </a></td>';
					

					/*echo '<td><a href="edit.php?kode_prog='.$data['kode_prog'].'">Edit</a> 
					
					<td><a href="hapus.php?kode_prog='.$data['kode_prog'].'">Hapus </a></td>';*/
					/*echo '<td style="background-color:#66ff99"><a href="tambah_rel.php?kode_prog='.$data['kode_prog'].'" target="_blank">Tambah</a></td>';*/
					echo '<td style="background-color:#66ff99"><a href="hasil-realisasi-humas.php?kode_prog='.$data['kode_prog'].'" target="_blank">Lihat</a></td>';
					//menampilkan link edit dan hapus

				echo '</tr>';
			}
		}
		?>
	</table>
	</br>
	<!--<h4><a href="tambah.php">Tambah Data</a></h4>-->
	</div>
</body>
</html>