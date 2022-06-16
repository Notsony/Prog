<p><a href="index-admin.php">Kembali</a>
<form method ="POST" action="edit-proses.php">
<?php
include_once('fix_mysql.inc.php');
	
	$kode = $_GET['kode_prog'];
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("pterpan16") or die("Database tidak ditemukan");
	$querynya = mysql_query("Select * from prog_kerja where kode_prog = '$kode'");
	$ab = mysql_fetch_assoc($querynya);
	$divisi		= $ab['divisi'];
	$nama		= $ab['nm_prog'];
	$indikator	= $ab['ren_indikator'];
	$jumlah		= $ab['ren_jumlah'];
	$satuan		= $ab['ren_satuan'];
	$anggaran	= $ab['ren_anggaran'];
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
<form method ="POST" action="edit-proses.php">
<table border=1>

<tr><th colspan=2>Form Edit Program Kerja</th></tr>
<tr><td width=120>Kode Program </td><td><input type="hidden" name="kode_prog" 
value="<?=$kode?>"/><?=$kode?></td></tr>

<tr><td>divisi</td>
<td>
<?php
	if ($divisi=="Humas")
	{
		echo "<input type='radio' name='divisi' value='Humas'checked>Humas";
		echo "<input type='radio' name='divisi' value='Riset'>Riset";
		echo "<input type='radio' name='divisi' value='Pendidikan'>Pendidikan";
	}
	elseif ($divisi == "Riset")
	{
		echo "<input type='radio' name='divisi' value='Humas'>Humas";
		echo "<input type='radio' name='divisi' value='Riset'checked>Riset";
		echo "<input type='radio' name='divisi' value='Pendidikan'>Pendidikan";
	}
	elseif ($divisi == "Pendidikan")
	{
		echo "<input type='radio' name='divisi' value='Humas'>Humas";
		echo "<input type='radio' name='divisi' value='Riset'>Riset";
		echo "<input type='radio' name='divisi' value='Pendidikan'checked>Pendidikan";
	}
	
?>
</td></tr>

<tr><td>Nama Program</td><td><input type="text" name="nm_prog"
value="<?=$nama?>" size="50"></td></tr>

<tr><td>Rencana Indikator</td><td><input type="text" name="ren_indikator"
value="<?=$indikator?>" size="70"></td></tr>
<tr><td>Rencana Jumlah</td><td><input type="text" name="ren_jumlah"
value="<?=$jumlah?>"></td></tr>

<tr><td>Rencana Satuan</td>
<td>
<?php
	if ($satuan=="Orang")
	{
		echo "<input type='radio' name='ren_satuan' value='Orang'checked>Orang";
		echo "<input type='radio' name='ren_satuan' value='Benda'>Benda";
		echo "<input type='radio' name='ren_satuan' value='Unit'>Unit";
		echo "<input type='radio' name='ren_satuan' value='Persen'>Persen";
	}
	elseif ($satuan == "Benda")
	{
		echo "<input type='radio' name='ren_satuan' value='Orang'>Orang";
		echo "<input type='radio' name='ren_satuan' value='Benda'checked>Benda";
		echo "<input type='radio' name='ren_satuan' value='Unit'>Unit";
		echo "<input type='radio' name='ren_satuan' value='Persen'>Persen";
	}
	elseif ($satuan == "Unit")
	{
		echo "<input type='radio' name='ren_satuan' value='Orang'>Orang";
		echo "<input type='radio' name='ren_satuan' value='Benda'>Benda";
		echo "<input type='radio' name='ren_satuan' value='Unit'checked>Unit";
		echo "<input type='radio' name='ren_satuan' value='Persen'>Persen";
	}
	elseif ($satuan == "Persen")
	{
		echo "<input type='radio' name='ren_satuan' value='Orang'>Orang";
		echo "<input type='radio' name='ren_satuan' value='Benda'>Benda";
		echo "<input type='radio' name='ren_satuan' value='Unit'>Unit";
		echo "<input type='radio' name='ren_satuan' value='Persen'checked>Persen";
	}
	
?>
<tr><td>Rencana Anggaran</td><td><input type="text" name="ren_anggaran"
value="<?=$anggaran?>"></td></tr>

<tr><td>Rencana Bulan 1</td>
<td>
<?php
	if ($b1=="y")
	{
		echo "<input type='radio' name='ren_bln1'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln1' 
		value=''>n";
	}
	elseif ($b1 == "")
	{
		echo "<input type='radio' name='ren_bln1' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln1'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 2</td>
<td>
<?php
	if ($b2=="y")
	{
		echo "<input type='radio' name='ren_bln2'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln2' 
		value=''>n";
	}
	elseif ($b2=="")
	{
		echo "<input type='radio' name='ren_bln2' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln2'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 3</td>
<td>
<?php
	if ($b3=="y")
	{
		echo "<input type='radio' name='ren_bln3'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln3' 
		value=''>n";
	}
	elseif ($b3=="")
	{
		echo "<input type='radio' name='ren_bln3' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln3'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 4</td>
<td>
<?php
	if ($b4=="y")
	{
		echo "<input type='radio' name='ren_bln4'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln4' 
		value=''>n";
	}
	elseif ($b4=="")
	{
		echo "<input type='radio' name='ren_bln4' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln4'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 5</td>
<td>
<?php
	if ($b5=="y")
	{
		echo "<input type='radio' name='ren_bln5'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln5' 
		value=''>n";
	}
	elseif ($b5=="")
	{
		echo "<input type='radio' name='ren_bln5' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln5'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 6</td>
<td>
<?php
	if ($b6=="y")
	{
		echo "<input type='radio' name='ren_bln6'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln6' 
		value=''>n";
	}
	elseif ($b6=="")
	{
		echo "<input type='radio' name='ren_bln6' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln6'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 7</td>
<td>
<?php
	if ($b7=="y")
	{
		echo "<input type='radio' name='ren_bln7'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln7' 
		value=''>n";
	}
	elseif ($b7=="")
	{
		echo "<input type='radio' name='ren_bln7' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln7'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 8</td>
<td>
<?php
	if ($b8=="y")
	{
		echo "<input type='radio' name='ren_bln8'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln8' 
		value=''>n";
	}
	elseif ($b8=="")
	{
		echo "<input type='radio' name='ren_bln8' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln8'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 9</td>
<td>
<?php
	if ($b9=="y")
	{
		echo "<input type='radio' name='ren_bln9'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln9' 
		value=''>n";
	}
	elseif ($b9=="")
	{
		echo "<input type='radio' name='ren_bln9' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln9'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 10</td>
<td>
<?php
	if ($b10=="y")
	{
		echo "<input type='radio' name='ren_bln10'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln10' 
		value=''>n";
	}
	elseif ($b10=="")
	{
		echo "<input type='radio' name='ren_bln10' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln10'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 11</td>
<td>
<?php
	if ($b11=="y")
	{
		echo "<input type='radio' name='ren_bln11'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln11' 
		value=''>n";
	}
	elseif ($b11=="")
	{
		echo "<input type='radio' name='ren_bln11' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln11'checked value=''checked>n";
	}
?>

<tr><td>Rencana Bulan 12</td>
<td>
<?php
	if ($b12=="y")
	{
		echo "<input type='radio' name='ren_bln12'checked value='y'checked>y";
		echo "<input type='radio' name='ren_bln12' 
		value=''>n";
	}
	elseif ($b12=="")
	{
		echo "<input type='radio' name='ren_bln12' 
		value='y'>y";
		echo "<input type='radio' name='ren_bln12'checked value=''checked>n";
	}
?>
</td></tr>

<tr><td>Tahun</td><td><input type="text" name="tahun"
value="<?=$tahun?>"></td></tr>


	<tr><th colspan=2>
	<input type="submit" name="kirim" value="SUBMIT"></th></tr>
	
</table>
</form>
