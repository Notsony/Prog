<!DOCTYPE html>
<html>
<head>
	<title>Tambah SWOT</title>
</head>
<body>
	<p><a href="swot.php">Kembali</a></p>
	
	<h3>Tambah Hasil SWOT</h3>
	
	<form action="tambah-proses_swot.php" method="post">
		<?php
		
			$koderes = $_GET['kode_res'];
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("pterpan16") or die("Database tidak ditemukan");
			$querynya = mysql_query("Select * from realisasi where kode_res = '$koderes'");
			$ab = mysql_fetch_assoc($querynya);
			$tahun = $ab['tahun'];

		?>
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode SWOT</td>
				<td>:</td>
				<td><input type="text" disabled="disabled" name="kode_swot"></td>
			</tr>
			<tr>
				<td>Kode Realisasi</td>
				<td>:</td>
				<td><input type="text" name="kode_res" value="<?=$koderes?>"></td>
			</tr>
			<tr>
				<td>Keterangan SWOT</td>
				<td>:</td>
				<td><textarea name="ket_swot" cols="45" rows="5" required></textarea></td>
			</tr>
			
			<tr>
				<td>Tipe SWOT</td>
				<td>:</td>
				<td><input <input  type="radio"  name="tipe_swot"value="S" <? if($tipe=='S'){echo 'checked';}?>
				S  
					<input type="radio" name="tipe_swot" value="W" <? if($tipe=='W'){echo 'checked';}?>
				W
					<input type="radio" name="tipe_swot" value="O" <? if($tipe=='O'){echo 'checked';}?>
				O
					<input type="radio" name="tipe_swot" value="T" <? if($tipe=='T'){echo 'checked';}?>
				T
				</td>
			</tr>
			
			<tr>
				<td>Tahun</td>
				<td>:</td>
				<td><input type="text" name="tahun" size="20" value="<?=$tahun?>" required></td>
			</tr>


			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>