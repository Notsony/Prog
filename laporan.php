<?php
include_once('fix_mysql.inc.php');
mysql_connect('localhost', 'root', '');
mysql_select_db('pterpan16');

$sql = "SELECT count(*) as num , p.tahun  FROM prog_kerja p GROUP BY tahun";
$result = mysql_query($sql);
// echo mysql_error();
$resultTahunan= array();
while($row = mysql_fetch_assoc($result)){	
		array_push($resultTahunan,$row);
}
// $jml = $result['num'];
// echo $jml."<br/>";

$sql = "SELECT p.kode_prog, p.nm_prog, ceil(p.ren_anggaran/ r.anggaran*100) as 'persen', p.ren_anggaran , r.anggaran FROM prog_kerja p LEFT JOIN realisasi r ON p.kode_prog = r.kode_prog WHERE p.ren_anggaran IS NOT NULL AND r.anggaran IS NOT NULL ORDER BY p.tahun ";
$result = mysql_query($sql);
// $result = ( $result );
echo mysql_error();
// $jml = $result;

$resultAngsuran= array();
while($row = mysql_fetch_assoc($result)){
		array_push($resultAngsuran,$row);		
}

$sql = "SELECT p.kode_prog, p.nm_prog ".
 		", IF(p.ren_bln1 = 'n' OR p.ren_bln1 IS NULL ,(IF(r.rel_bln1 = 'y','tidak','')),(IF(p.ren_bln1 = r.rel_bln1, 'tepat', 'tidak'))) as 'bulan1'"
 		.", IF(p.ren_bln2 = 'n' OR p.ren_bln1 IS NULL ,(IF(r.rel_bln2 = 'y','tidak','')) ,(IF(p.ren_bln2 = r.rel_bln2, 'tepat', 'tidak'))) as 'bulan2'"
 		.", IF(p.ren_bln3 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln3 = 'y','tidak','')) ,(IF(p.ren_bln3 = r.rel_bln3, 'tepat', 'tidak'))) as 'bulan3'"
 		.", IF(p.ren_bln4 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln4 = 'y','tidak','')) ,(IF(p.ren_bln4 = r.rel_bln4, 'tepat', 'tidak'))) as 'bulan4'"
 		.", IF(p.ren_bln5 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln5 = 'y','tidak','')) ,(IF(p.ren_bln5 = r.rel_bln5, 'tepat', 'tidak'))) as 'bulan5'"
 		.", IF(p.ren_bln6 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln6 = 'y','tidak','')) ,(IF(p.ren_bln6 = r.rel_bln6, 'tepat', 'tidak'))) as 'bulan6'"
 		.", IF(p.ren_bln7 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln7 = 'y','tidak','')) ,(IF(p.ren_bln7 = r.rel_bln7, 'tepat', 'tidak'))) as 'bulan7'"
 		.", IF(p.ren_bln8 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln8 = 'y','tidak','')) ,(IF(p.ren_bln8 = r.rel_bln8, 'tepat', 'tidak'))) as 'bulan8'"
 		.", IF(p.ren_bln9 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln9 = 'y','tidak','')) ,(IF(p.ren_bln9 = r.rel_bln9, 'tepat', 'tidak'))) as 'bulan9'"
 		.", IF(p.ren_bln10 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln10 = 'y','tidak','')) ,(IF(p.ren_bln10 = r.rel_bln10, 'tepat', 'tidak'))) as 'bulan10'"
 		.", IF(p.ren_bln11 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln11 = 'y','tidak','')) ,(IF(p.ren_bln11 = r.rel_bln11, 'tepat', 'tidak'))) as 'bulan11'"
 		.", IF(p.ren_bln12 = 'n' OR p.ren_bln1 IS NULL,(IF(r.rel_bln12 = 'y','tidak','')) ,(IF(p.ren_bln12 = r.rel_bln12, 'tepat', 'tidak'))) as 'bulan12'"
 	."FROM prog_kerja p LEFT JOIN realisasi r ON p.kode_prog = r.kode_prog WHERE r.anggaran IS NOT NULL";
$result = mysql_query($sql);
// $result = ( $result );
echo mysql_error();
// $jml = $result;
$resultWaktu = array();
while($row = mysql_fetch_assoc($result)){
		// print_r($row);
		$kesimpulan = 'Tepat Waktu';
		for($i=1; $i<13; $i++){
			// echo $row['bulan'.$i];
			if($row['bulan'.$i]=='tidak'){
				$kesimpulan='Tidak Tepat Waktu';
			}
		}
		$row['kesimpulan']=$kesimpulan;
		array_push($resultWaktu,$row);
		// echo "<br/>";		
}

$sql = "SELECT kode_res, floor(count(IF(tipe_swot='S',1,NULL))/count(*)*100) as 'Str', floor(count(IF(tipe_swot='W',1,NULL))/count(*)*100) as 'Wkn' , floor(count(IF(tipe_swot='O',1,NULL))/count(*)*100) as 'Opt', floor(count(IF(tipe_swot='T',1,NULL))/count(*)*100) as 'Thr' FROM swot GROUP BY kode_res";
$result = mysql_query($sql);
// $result = ( $result );
echo mysql_error();
// $jml = $result;
$resultSwot = array();
while($row = mysql_fetch_assoc($result)){
		array_push($resultSwot,$row);		
}

?>


<div class="col-md-12">
	
	<h2>Laporan Per Tahun</h2>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>Jumlah Program</th>
			<th>Tahun</th>
		</tr>
		<?php
		foreach($resultTahunan as $row)
		{	
			// print_r($row);
			echo '<tr>';				
					echo '<td>'.$row['num'].'</td>';		
					echo '<td>'.$row['tahun'].'</td>';	
			echo '</tr>';
		}
		?>
</table>
</div>

<div class="col-md-12">
	
	<h2>Laporan Rencana dan Realisasi Angsuran</h2>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>Kode Program</th>
			<th>Nama Program</th>
			<th>Rencana Anggaran</th>
			<th>Realisasi Anggaran</th>
			<th>Persen</th>
		</tr>
		<?php
		foreach($resultAngsuran as $row)
		{	
			// print_r($row);
			echo '<tr>';				
					echo '<td>'.$row['kode_prog'].'</td>';		
					echo '<td>'.$row['nm_prog'].'</td>';	
					echo '<td>'.$row['ren_anggaran'].'</td>';
					echo '<td>'.$row['anggaran'].'</td>';
					echo '<td>'.$row['persen'].'%</td>';
			echo '</tr>';
		}
		?>
</table>
</div>


<div class="col-md-12">
	
	<h2>Laporan Waktu Pelaksanaan</h2>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>Kode Program</th>
			<th>Nama Program</th>
			<th>Bulan 1 </th>
			<th>Bulan 2 </th>
			<th>Bulan 3 </th>
			<th>Bulan 4 </th>
			<th>Bulan 5 </th>
			<th>Bulan 6 </th>
			<th>Bulan 7 </th>
			<th>Bulan 8 </th>
			<th>Bulan 9 </th>
			<th>Bulan 10 </th>
			<th>Bulan 11 </th>
			<th>Bulan 12 </th>
			<th>Kesimpulan</th>
		</tr>
		<?php
		foreach($resultWaktu as $row)
		{	
			// print_r($row);
			echo '<tr>';		
					echo '<td>'.$row['kode_prog'].'</td>';		
					echo '<td>'.$row['nm_prog'].'</td>';	
					echo '<td>'.$row['bulan1'].'</td>';		
					echo '<td>'.$row['bulan2'].'</td>';
					echo '<td>'.$row['bulan3'].'</td>';
					echo '<td>'.$row['bulan4'].'</td>';
					echo '<td>'.$row['bulan5'].'</td>';
					echo '<td>'.$row['bulan6'].'</td>';
					echo '<td>'.$row['bulan7'].'</td>';
					echo '<td>'.$row['bulan8'].'</td>';
					echo '<td>'.$row['bulan9'].'</td>';
					echo '<td>'.$row['bulan10'].'</td>';
					echo '<td>'.$row['bulan11'].'</td>';
					echo '<td>'.$row['bulan12'].'</td>';
					echo '<td>'.$row['kesimpulan'].'</td>';
					
			echo '</tr>';
		}
		?>
</table>
</div>

<div class="col-md-12">
	
	<h2>Laporan SWOT</h2>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">

			<th>Kode Realisasi</th>
			<th>Strong</th>
			<th>Weakness</th>
			<th>Oppertunity</th>
			<th>Threat</th>
		</tr>
		<?php
		foreach($resultSwot as $row)
		{	
			// print_r($row);

			echo '<tr>';				
					echo '<td>'.$row['kode_res'].'</td>';		
					echo '<td>'.$row['Str'].'%</td>';	
					echo '<td>'.$row['Wkn'].'%</td>';
					echo '<td>'.$row['Opt'].'%</td>';
					echo '<td>'.$row['Thr'].'%</td>';
			echo '</tr>';
		}
		?>
</table>
</div>
