<!DOCTYPE html>
<html>
<head>
	<title>Hasil SWOT</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" href="css/W3.css">
 <script>
	$('tr:not(:has(td[rowspan])):even')
 </script>
</head>
<body>

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
	
	<h2>Realisasi</h2>
	<table class="w3-table-all w3-card-4" cellpadding="5" cellspacing="0" border="1">
		<tr class="w3-teal">
			<th rowspan="2">Cawu</th>
			<th rowspan="2">Jumlah</th>
			<th rowspan="2">Satuan</th>
			<th rowspan="2">Anggaran</th>
			<th colspan="12">Bulan</th>
			<th rowspan="2">Tahun</th>
		</tr>
		<tr>
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
		</tr>
		<?php
		include_once('fix_mysql.inc.php');
		//include file koneksi ke database
		include('koneksi.php');
		
		//echo $_GET['kode_prog'];  //---> NANTI HASILNYA P0001


		$kode = $_GET['kode_res'];                   
		$query = mysql_query("SELECT * FROM realisasi WHERE kode_res='$kode'") or die(mysql_error());  


		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
				
			echo "<br>";
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				echo '<tr style="height: 40px; text-align: center;">';
					//echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['cawu'].'</td>';		
					echo '<td>'.$data['jumlah'].'</td>';	//menampilkan data rencana jumlah dari database
					echo '<td>'.$data['satuan'].'</td>';	//menampilkan data rencana satuan dari database
					echo '<td>'.$data['anggaran'].'</td>';	//menampilkan data rencana anggaran database
					echo '<td>'.$data['rel_bln1'].'</td>';		//menampilkan data rencana bulan 1 dari database
					echo '<td>'.$data['rel_bln2'].'</td>';		//menampilkan data rencana bulan 2 dari database
					echo '<td>'.$data['rel_bln3'].'</td>';		//menampilkan data rencana bulan 3 dari database
					echo '<td>'.$data['rel_bln4'].'</td>';		//menampilkan data rencana bulan 4 dari database
					echo '<td>'.$data['rel_bln5'].'</td>';		//menampilkan data rencana bulan 5 dari database
					echo '<td>'.$data['rel_bln6'].'</td>';		//menampilkan data rencana bulan 6 dari database
					echo '<td>'.$data['rel_bln7'].'</td>';		//menampilkan data rencana bulan 7 dari database
					echo '<td>'.$data['rel_bln8'].'</td>';		//menampilkan data rencana bulan 8 dari database
					echo '<td>'.$data['rel_bln9'].'</td>';		//menampilkan data rencana bulan 9 dari database
					echo '<td>'.$data['rel_bln10'].'</td>';		//menampilkan data rencana bulan 10 dari database
					echo '<td>'.$data['rel_bln11'].'</td>';		//menampilkan data rencana bulan 11 dari database
					echo '<td>'.$data['rel_bln12'].'</td>';		//menampilkan data rencana bulan 12 dari database
					echo '<td>'.$data['tahun'].'</td>';		
					

					//menampilkan link edit dan hapus

				echo '</tr>';
			}
		}
		?>
	</table>

    </br>
    <h2>Hasil SWOT</h2>
	<br/>
	<table>
		<tr>
			<!-- TABEL SWOT 'S' -->
			<td valign="top">
			<table class="w3-card-4" cellpadding="5" cellspacing="0" border="1" style="border-style:solid; border-color: #ccc">
				<tr style="background-color:teal; color:white">
					<th>S</th>
				</tr>
				
				<?php
				//include file koneksi ke database
				include('koneksi.php');
				
				$kode = $_GET['kode_res'];
				$query = mysql_query("SELECT * FROM swot WHERE kode_res='$kode' AND tipe_swot='S'") or die(mysql_error());
				
				//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
				if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
					
					//jika data kosong, maka akan menampilkan row kosong
					echo '<tr><td colspan="6">-</td></tr>';
					
				}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
					
					//jika data tidak kosong, maka akan melakukan perulangan while
					//$no = 1;	//membuat variabel $no untuk membuat nomor urut
					while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
						
						//menampilkan row dengan data di database
						echo '<tr style="height: 40px; text-align: center;">';
							//echo '<td>'.$no.'</td>';	//menampilkan nomor urut
							echo '<td>'.$data['ket_swot'].'</td>';
						echo '</tr>';
					}
				}
				?>
			</table>
			</td>

			<!-- TABEL SWOT 'W' -->
			<td valign="top">
			<table class="w3-card-4" cellpadding="5" cellspacing="0" border="1" style="border-style:solid; border-color: #ccc">
				<tr style="background-color:teal; color:white">
					<th>W</th>
				</tr>
				
				<?php
				//include file koneksi ke database
				include('koneksi.php');
				
				$kode = $_GET['kode_res'];
				$query = mysql_query("SELECT * FROM swot WHERE kode_res='$kode' AND tipe_swot='W'") or die(mysql_error());
				
				//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
				if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
					
					//jika data kosong, maka akan menampilkan row kosong
					echo '<tr><td colspan="6">-</td></tr>';
					
				}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
					
					//jika data tidak kosong, maka akan melakukan perulangan while
					//$no = 1;	//membuat variabel $no untuk membuat nomor urut
					while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
						
						//menampilkan row dengan data di database
						echo '<tr style="height: 40px; text-align: center;">';
							//echo '<td>'.$no.'</td>';	//menampilkan nomor urut
							echo '<td>'.$data['ket_swot'].'</td>';
						echo '</tr>';
					}
				}
				?>
			</table>
			</td>

			<!-- TABEL SWOT 'O' -->
			<td valign="top">
			<table class="w3-card-4" cellpadding="5" cellspacing="0" border="1" style="border-style:solid; border-color: #ccc">
				<tr style="background-color:teal; color:white">
					<th>O</th>
				</tr>
				
				<?php
				//include file koneksi ke database
				include('koneksi.php');
				
				$kode = $_GET['kode_res'];
				$query = mysql_query("SELECT * FROM swot WHERE kode_res='$kode' AND tipe_swot='O'") or die(mysql_error());
				
				//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
				if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
					
					//jika data kosong, maka akan menampilkan row kosong
					echo '<tr><td colspan="6">-</td></tr>';
					
				}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
					
					//jika data tidak kosong, maka akan melakukan perulangan while
					//$no = 1;	//membuat variabel $no untuk membuat nomor urut
					while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
						
						//menampilkan row dengan data di database
						echo '<tr style="height: 40px; text-align: center;">';
							//echo '<td>'.$no.'</td>';	//menampilkan nomor urut
							echo '<td>'.$data['ket_swot'].'</td>';
						echo '</tr>';
					}
				}
				?>
			</table>
			</td>

			<!-- TABEL SWOT 'T' -->
			<td valign="top">
			<table class="w3-card-4" cellpadding="5" cellspacing="0" border="1" style="border-style:solid; border-color: #ccc">
				<tr style="background-color:teal; color:white">
					<th>T</th>
				</tr>
				
				<?php
				//include file koneksi ke database
				include('koneksi.php');
				
				$kode = $_GET['kode_res'];
				$query = mysql_query("SELECT * FROM swot WHERE kode_res='$kode' AND tipe_swot='T'") or die(mysql_error());
				
				//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
				if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
					
					//jika data kosong, maka akan menampilkan row kosong
					echo '<tr><td colspan="6" style="text-align: center;">-</td></tr>';
					
				}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
					
					//jika data tidak kosong, maka akan melakukan perulangan while
					//$no = 1;	//membuat variabel $no untuk membuat nomor urut
					while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
						
						//menampilkan row dengan data di database
						echo '<tr style="height: 40px; text-align: center;">';
							//echo '<td>'.$no.'</td>';	//menampilkan nomor urut
							echo '<td>'.$data['ket_swot'].'</td>';
						echo '</tr>';
					}
				}
				?>
			</table>
			</td>
			
		</tr>
	</table>
	<!--<h4><a href="tambah_rel.php">Tambah Realisasi Baru</a></h4>-->
	</div>

<script src="js/jquery-1.11.3.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>