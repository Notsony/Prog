<p><a href="realisasi.php">Kembali</a>
<form method ="POST" action="edit-rel-proses.php">
<?php
include_once('fix_mysql.inc.php');
	
	$kode = $_GET['kode_res'];
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("pterpan16") or die("Database tidak ditemukan");
	$querynya = mysql_query("Select * from realisasi where kode_res = '$kode'");
	$ab = mysql_fetch_assoc($querynya);

	$kode2		= $ab['kode_prog'];
	$cawu		= $ab['cawu'];
	$jumlah		= $ab['jumlah'];
	$satuan		= $ab['satuan'];
	$anggaran	= $ab['anggaran'];
	$b1	= $ab['rel_bln1'];
	$b2	= $ab['rel_bln2'];
	$b3	= $ab['rel_bln3'];
	$b4	= $ab['rel_bln4'];
	$b5	= $ab['rel_bln5'];
	$b6	= $ab['rel_bln6'];
	$b7	= $ab['rel_bln7'];
	$b8	= $ab['rel_bln8'];
	$b9	= $ab['rel_bln9'];
	$b10 = $ab['rel_bln10'];
	$b11 = $ab['rel_bln11'];
	$b12 = $ab['rel_bln12'];
	$tahun = $ab['tahun'];
	if($satuan ==''){

	}
?>
<form method ="POST" action="edit-rel-proses.php">
<table border=1>

<tr><th colspan=2>Form Edit Realisasi</th></tr>

<tr><td width=120>Kode Realisasi </td><td><input type="hidden" name="kode_res" 
value="<?=$kode?>"/><?=$kode?></td></tr>

<tr><td width=120>Kode Program </td><td><input type="hidden" name="kode_prog" 
value="<?=$kode2?>"/><?=$kode2?></td></tr>

<!--<tr><td>Cawu</td><td><input type="text" name="cawu"
value="<?=$cawu?>" size="50"></td></tr>-->

<tr><td>Cawu</td>
<td>
<?php
	if ($cawu == "1")
	{
		echo "<input type='radio' name='cawu' value='1'checked>1";
		echo "<input type='radio' name='cawu' value='2'>2";
		echo "<input type='radio' name='cawu' value='3'>3";
	}
	elseif ($cawu == "2")
	{
		echo "<input type='radio' name='cawu' value='1'>1";
		echo "<input type='radio' name='cawu' value='2'checked>2";
		echo "<input type='radio' name='cawu' value='3'>3";
	}
	elseif ($cawu == "3")
	{
		echo "<input type='radio' name='cawu' value='1'>1";
		echo "<input type='radio' name='cawu' value='2'>2";
		echo "<input type='radio' name='cawu' value='3'checked>3";
	}
?></td>

<tr><td>Rencana Jumlah</td><td><input type="text" name="jumlah"
value="<?=$jumlah?>"></td></tr>

<tr><td>Realisasi Satuan</td>
<td>
<?php
	if ($satuan=="Orang")
	{
		echo "<input type='radio' name='satuan'checked value='Orang'checked>Orang";
		echo "<input type='radio' name='satuan' value='Benda'>Benda";
		echo "<input type='radio' name='satuan' value='Unit'>Unit";
		echo "<input type='radio' name='satuan' value='Persen'>Persen";
	}
	elseif ($satuan == "Benda")
	{
		echo "<input type='radio' name='satuan' value='Orang'checked>Orang";
		echo "<input type='radio' name='satuan'checked value='Benda'>Benda";
		echo "<input type='radio' name='satuan' value='Unit'>Unit";
		echo "<input type='radio' name='satuan' value='Persen'>Persen";
	}
	elseif ($satuan == "Unit")
	{
		echo "<input type='radio' name='satuan' value='Orang'checked>Orang";
		echo "<input type='radio' name='satuan' value='Benda'>Benda";
		echo "<input type='radio' name='satuan'checked value='Unit'>Unit";
		echo "<input type='radio' name='satuan' value='Persen'>Persen";
	}
	elseif ($satuan == "Persen")
	{
		echo "<input type='radio' name='satuan' value='Orang'checked>Orang";
		echo "<input type='radio' name='satuan' value='Benda'>Benda";
		echo "<input type='radio' name='satuan' value='Unit'>Unit";
		echo "<input type='radio' name='satuan'checked value='Persen'>Persen";
	}
?></td>
<tr><td>Realisasi Anggaran</td><td><input type="text" name="anggaran"
value="<?=$anggaran?>"></td></tr>

<tr><td>Realisasi Bulan 1</td>
<td>
<?php
	if ($b1=="y")
	{
		echo "<input type='radio' name='rel_bln1'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln1' 
		value=''>n";
	}
	elseif ($b1 == "")
	{
		echo "<input type='radio' name='rel_bln1' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln1'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 2</td>
<td>
<?php
	if ($b2=="y")
	{
		echo "<input type='radio' name='rel_bln2'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln2' 
		value=''>n";
	}
	elseif ($b2=="")
	{
		echo "<input type='radio' name='rel_bln2' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln2'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 3</td>
<td>
<?php
	if ($b3=="y")
	{
		echo "<input type='radio' name='rel_bln3'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln3' 
		value=''>n";
	}
	elseif ($b3=="")
	{
		echo "<input type='radio' name='rel_bln3' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln3'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 4</td>
<td>
<?php
	if ($b4=="y")
	{
		echo "<input type='radio' name='rel_bln4'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln4' 
		value=''>n";
	}
	elseif ($b4=="")
	{
		echo "<input type='radio' name='rel_bln4' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln4'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 5</td>
<td>
<?php
	if ($b5=="y")
	{
		echo "<input type='radio' name='rel_bln5'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln5' 
		value=''>n";
	}
	elseif ($b5=="")
	{
		echo "<input type='radio' name='rel_bln5' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln5'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 6</td>
<td>
<?php
	if ($b6=="y")
	{
		echo "<input type='radio' name='rel_bln6'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln6' 
		value=''>n";
	}
	elseif ($b6=="")
	{
		echo "<input type='radio' name='rel_bln6' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln6'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 7</td>
<td>
<?php
	if ($b7=="y")
	{
		echo "<input type='radio' name='rel_bln7'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln7' 
		value=''>n";
	}
	elseif ($b7=="")
	{
		echo "<input type='radio' name='rel_bln7' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln7'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 8</td>
<td>
<?php
	if ($b8=="y")
	{
		echo "<input type='radio' name='rel_bln8'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln8' 
		value=''>n";
	}
	elseif ($b8=="")
	{
		echo "<input type='radio' name='rel_bln8' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln8'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 9</td>
<td>
<?php
	if ($b9=="y")
	{
		echo "<input type='radio' name='rel_bln9'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln9' 
		value=''>n";
	}
	elseif ($b9=="")
	{
		echo "<input type='radio' name='rel_bln9' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln9'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 10</td>
<td>
<?php
	if ($b10=="y")
	{
		echo "<input type='radio' name='rel_bln10'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln10' 
		value=''>n";
	}
	elseif ($b10=="")
	{
		echo "<input type='radio' name='rel_bln10' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln10'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 11</td>
<td>
<?php
	if ($b11=="y")
	{
		echo "<input type='radio' name='rel_bln11'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln11' 
		value=''>n";
	}
	elseif ($b11=="")
	{
		echo "<input type='radio' name='rel_bln11' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln11'checked value=''checked>n";
	}
?>

<tr><td>Realisasi Bulan 12</td>
<td>
<?php
	if ($b12=="y")
	{
		echo "<input type='radio' name='rel_bln12'checked value='y'checked>y";
		echo "<input type='radio' name='rel_bln12' 
		value=''>n";
	}
	elseif ($b12=="")
	{
		echo "<input type='radio' name='rel_bln12' 
		value='y'>y";
		echo "<input type='radio' name='rel_bln12'checked value=''checked>n";
	}
?>
</td></tr>

<tr><td>Tahun</td><td><input type="text" name="tahun"
value="<?=$tahun?>"></td></tr>


	<tr><th colspan=2>
	<input type="submit" name="kirim" value="SUBMIT"></th></tr>
	
</table>
</form>
