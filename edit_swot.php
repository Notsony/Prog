<p><a href="swot.php">Kembali</a>
<form method ="POST" action="edit-swot-proses.php">
<?php
include_once('fix_mysql.inc.php');
	
	$kode = $_GET['kode_swot'];
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("pterpan16") or die("Database tidak ditemukan");
	$querynya = mysql_query("Select * from swot where kode_swot = '$kode'");
	$ab = mysql_fetch_assoc($querynya);

	$kode2		= $ab['kode_res'];
	$ket_swot   = $ab['ket_swot'];
	$tipe_swot	= $ab['tipe_swot'];
	$tahun = $ab['tahun'];

?>
<form method ="POST" action="edit-swot-proses.php">
<table border=1>

<tr><th colspan=2>Form Edit Program Kerja</th></tr>
<tr><td width=120>Kode SWOT </td><td><input type="hidden" name="kode_swot" value="<?=$kode?>"/><?=$kode?></td></tr>
<tr><td>Kode Realisasi</td><td><input type="hidden" name="kode_res" value="<?=$kode2?>" size="50"><?=$kode2?></td></tr>
<tr><td>Keterangan SWOT</td><td><input type="textarea" name="ket_swot" value="<?=$ket_swot?>" size="70"></td></tr>

<tr><td>Tipe SWOT</td>
<td>
<?php
	if ($tipe_swot=="S")
	{
		echo "<input type='radio' name='tipe_swot'checked value='S'checked>S";
		echo "<input type='radio' name='tipe_swot' value='W'>W";
		echo "<input type='radio' name='tipe_swot' value='O'>O";
		echo "<input type='radio' name='tipe_swot' value='T'>T";
	}
	elseif ($tipe_swot == "W")
	{
		echo "<input type='radio' name='tipe_swot' value='S'checked>S";
		echo "<input type='radio' name='tipe_swot'checked value='W'>W";
		echo "<input type='radio' name='tipe_swot' value='O'>O";
		echo "<input type='radio' name='tipe_swot' value='T'>T";
	}
	elseif ($tipe_swot == "O")
	{
		echo "<input type='radio' name='tipe_swot' value='S'checked>S";
		echo "<input type='radio' name='tipe_swot' value='W'>W";
		echo "<input type='radio' name='tipe_swot'checked value='O'>O";
		echo "<input type='radio' name='tipe_swot' value='T'>T";
	}
	elseif ($tipe_swot == "T")
	{
		echo "<input type='radio' name='tipe_swot' value='S'checked>S";
		echo "<input type='radio' name='tipe_swot' value='W'>W";
		echo "<input type='radio' name='tipe_swot' value='O'>O";
		echo "<input type='radio' name='tipe_swot'checked value='T'>T";
	}
	
?>
</td></tr>

<tr><td>Tahun</td><td><input type="text" name="tahun"
value="<?=$tahun?>"></td></tr>


	<tr><th colspan=2>
	<input type="submit" name="kirim" value="SUBMIT"></th></tr>
	
</table>
</form>
