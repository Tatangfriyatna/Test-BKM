<?php
$bulan = array('1'=>'Januari', 
			'Februari', 
			'Maret' , 
			'April' , 
			'Mei', 
			'Juni', 
			'Juli', 
			'Agustus', 
			'September', 
			'Oktober', 
			'November', 
			'Desember'
		);
$batas_waktu = '2020-05-01';
echo '<table>
		<tr>
			<th>Bulan</th>
		</tr>';
for ($i = 6; $i < count($bulan); $i++)
{	
	$bln_batas = date("m",strtotime($batas_waktu));
	echo '<tr>
			<td> ' . strtoupper($bulan[$i]) . ' </td>';
	echo '</tr>';
}

echo '</table>';
?>