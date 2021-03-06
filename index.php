<!DOCTYPE html>
<html>
<head>
	<title>Program Kerja</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/W3.css">
</head>
<body>
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
		  <a class="navbar-brand" href="index.php">HMSI</a></li>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Program Kerja <span class="sr-only">(current)</span></a></li>
			
		  </ul>
		  <form class="navbar-form navbar-right" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Find</button>
		  </form>

		  <ul class="nav navbar-nav navbar-right">
			<li><a href="login.php">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login
			</a></li>
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
			<th>Nama Program</th>
			<th>Rencana Indikator</th>
			
		</tr>
		
		<?php
		include_once('fix_mysql.inc.php');
		//include file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table program kerja, ditampilkan semua
		$query = mysql_query("SELECT * FROM prog_kerja") or die(mysql_error());
		
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
					echo '<td>'.$data['nm_prog'].'</td>';		//menampilkan data nama program dari database
					echo '<td>'.$data['ren_indikator'].'</td>';


				echo '</tr>';
			}
		}
		?>
	</table>
	</br>
	</div>
</body>
</html>