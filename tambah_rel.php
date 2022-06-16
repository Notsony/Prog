<!DOCTYPE html>
<html>
<head>
	<title>Tambah Realisasi</title>

<!--<script>
	$("input[name='koderes']").each(function(ind) {
		$(this).val(ind + 1);
	});
</script>-->
</head>
<body>
	<p><a href="realisasi.php">Kembali</a></p>
	
	<h3>Tambah Data Hasil Realisasi</h3>
	
	<form action="tambah-proses_rel.php" method="post">
		<?php
		
			$kode = $_GET['kode_prog'];
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("pterpan16") or die("Database tidak ditemukan");
			$querynya = mysql_query("Select * from prog_kerja where kode_prog = '$kode'");
			$ab = mysql_fetch_assoc($querynya);
			$satuan = $ab['ren_satuan'];
			$b1	= $ab['ren_bln1'];
			$b2	= $ab['ren_bln2'];
			$b3	= $ab['ren_bln3'];
			$b4	= $ab['ren_bln4'];
			$b5	= $ab['ren_bln5'];
			$b6	= $ab['ren_bln6'];
			$b7	= $ab['ren_bln7'];
			$b8	= $ab['ren_bln8'];
			$b9	= $ab['ren_bln9'];
			$b10 = $ab['ren_bln10'];
			$b11 = $ab['ren_bln11'];
			$b12 = $ab['ren_bln12'];
			$tahun = $ab['tahun'];

		?>
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode Realisasi</td>
				<td>:</td>
				<td><input name="koderes" type="text" disabled="disabled"  name="kode_res" required></td>
			</tr>
			<tr>
				<td>Kode Program</td>
				<td>:</td>
				<td><input type="text" name="kode_prog" value="<?=$kode?>"/></td>
			</tr>
			<tr>
				<td>Cawu</td>
				<td>:</td>
				<td>
				<select name="cawu">
					<option value="1">Satu</option>
					<option value="2">Dua</option>
					<option value="3">Tiga</option>
				</select>
				</td>
			</tr>
			
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jumlah" size="10" required></td>
			</tr>
			
			<tr>
				<td>Satuan</td>
				<td>:</td>
				<td>
				<!--<select name="satuan">
					<option value="Orang">Orang</option>
					<option value="Benda">Benda</option>
					<option value="Unit">Unit</option>
					<option value="Persen">Persen</option>
				</select>-->
				<input type="text" name="satuan" value="<?=$satuan?>"/></td>
				</td>
			</tr>

			<tr>
				<td>Anggaran</td>
				<td>:</td>
				<td><input type="text" name="anggaran" size="20" required></td>
			</tr>
			

			<tr>
				<td>Realisasi bulan 1</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln1" value="y">Yes
					<input type="radio" name="rel_bln1" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 2</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln2" value="y">Yes
					<input type="radio" name="rel_bln2" value="" checked>No
				</td>
			</tr>

			

			<tr>
				<td>Realisasi bulan 3</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln3" value="y">Yes
					<input type="radio" name="rel_bln3" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 4</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln4" value="y">Yes
					<input type="radio" name="rel_bln4" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 5</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln5" value="y">Yes
					<input type="radio" name="rel_bln5" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 6</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln6" value="y">Yes
					<input type="radio" name="rel_bln6" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 7</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln7" value="y">Yes
					<input type="radio" name="rel_bln7" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 8</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln8" value="y">Yes
					<input type="radio" name="rel_bln8" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 9</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln9" value="y">Yes
					<input type="radio" name="rel_bln9" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 10</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln10" value="y">Yes
					<input type="radio" name="rel_bln10" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 11</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln11" value="y">Yes
					<input type="radio" name="rel_bln11" value="" checked>No
				</td>
			</tr>

			<tr>
				<td>Realisasi bulan 12</td>
				<td>:</td>
				<td>
					<input type="radio" name="rel_bln12" value="y">Yes
					<input type="radio" name="rel_bln12" value="" checked>No
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