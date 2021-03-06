<!DOCTYPE html>
<html>
<head>
	<title>Swot</title>
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
		  <a class="navbar-brand" href="index-admin.php">HMSI</a></li>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class><a href="index-admin.php">Program Kerja <span class="sr-only">(current)</span></a></li>
			<li class><a href="tambah.php" target="_blank">Tambah Program <span class="sr-only">(current)</span></a></li>
			<li class><a href="realisasi.php">Realisasi <span class="sr-only">(current)</span></a></li>
			<li class="active"><a href="swot.php">Swot <span class="sr-only">(current)</span></a></li>
			<li class><a href="laporan.php" target="_blank">Laporan <span class="sr-only">(current)</span></a></li>
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
	
	<h2>Data Hasil Swot</h2>
	
	<table class="w3-table-all w3-card-4" cellpadding="5" cellspacing="0" border="1">
		<tr class="w3-teal">
			<th>Kode Swot</th>
			<th>Kode Realisasi</th>
			<th>Keterangan SWOT</th>
			<th>Tipe SWOT</th>
			<th>Tahun</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		

		<?php
		//include file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table program kerja, ditampilkan semua
		$query = mysql_query("SELECT * FROM swot") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			//$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					//echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['kode_swot'].'</td>';		
					echo '<td>'.$data['kode_res'].'</td>';		
					echo '<td>'.$data['ket_swot'].'</td>';	
					echo '<td>'.$data['tipe_swot'].'</td>';	
					echo '<td>'.$data['tahun'].'</td>';	
					//echo '<td><a href='hapus.php?kode_prog=$c[kode_prog]'>Hapus </a></td>';
					

					echo '<td><a href="edit_swot.php?kode_swot='.$data['kode_swot'].'">Edit</a> 
					
					<td><a href="hapus_swot.php?kode_swot='.$data['kode_swot'].'">Hapus </a></td>';
					//menampilkan link edit dan hapus

				echo '</tr>';
			}
		}
		?>
	</table>
	</div>
</body>
</html>