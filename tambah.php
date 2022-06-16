<!DOCTYPE html>
<html>
<head>
	<title>Tambah Program kerja</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<p><a href="index-admin.php">Kembali</a></p>
	
	<h3>Tambah Data Program Kerja</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>

				<td>Kode Program</td>
				<td>:</td>
				<td><input type="text" name="kode_prog" required></td>
			</tr>

			<tr>
				<td>Divisi</td>
				<td>:</td>
				<td>
				<select name="divisi">
					<option value="Humas">Humas</option>
					<option value="Riset">Riset</option>
					<option value="Pendidikan">Pendidikan</option>
				</select>
				</td>
			</tr>

			<tr>
				<td>Nama Program</td>
				<td>:</td>
				<td><textarea name="nm_prog" cols="45" rows="5" required></textarea></td>
			</tr>

			<tr>
				<td>Rencana Indikator</td>
				<td>:</td>
				<td><textarea name="ren_indikator" cols="45" rows="5" required></textarea></td>
			</tr>
			
			<tr>
				<td>Rencana Jumlah</td>
				<td>:</td>
				<td><input type="text" name="ren_jumlah" size="10" required></td>
			</tr>
			
			<tr>
				<td>Rencana Satuan</td>
				<td>:</td>
				<td>
				<select name="ren_satuan">
					<option value="Orang">Orang</option>
					<option value="Benda">Benda</option>
					<option value="Unit">Unit</option>
					<option value="Persen">Persen</option>
				</select>
				</td>
			</tr>

			<tr>
				<td>Rencana Anggaran</td>
				<td>:</td>
				<td><input type="text" name="ren_anggaran" size="20" required></td>
			</tr>

			<tr>
				<td>Rencana bulan 1</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln1" value="y">Yes
					<input type="radio" name="ren_bln1" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 2</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln2" value="y">Yes
					<input type="radio" name="ren_bln2" value="" checked>No
				</td>
			</tr>

			

			<tr>
				<td>Rencana bulan 3</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln3" value="y">Yes
					<input type="radio" name="ren_bln3" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 4</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln4" value="y">Yes
					<input type="radio" name="ren_bln4" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 5</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln5" value="y">Yes
					<input type="radio" name="ren_bln5" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 6</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln6" value="y">Yes
					<input type="radio" name="ren_bln6" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 7</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln7" value="y">Yes
					<input type="radio" name="ren_bln7" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 8</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln8" value="y">Yes
					<input type="radio" name="ren_bln8" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 9</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln9" value="y">Yes
					<input type="radio" name="ren_bln9" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 10</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln10" value="y">Yes
					<input type="radio" name="ren_bln10" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 11</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln11" value="y">Yes
					<input type="radio" name="ren_bln11" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Rencana bulan 12</td>
				<td>:</td>
				<td>
					<input type="radio" name="ren_bln12" value="y">Yes
					<input type="radio" name="ren_bln12" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Tahun</td>
				<td>:</td>
				<td><input type="text" name="tahun" size="20" required></td>
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