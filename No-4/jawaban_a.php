<?php
$data		= array("AKU","SUKA","MAKAN","NASI","PADANG");
$data2		= array("PADANG","NASI","MAKAN","SUKA","AKU");
$merge		= array_merge ($data,$data2);

foreach($data as $x)
{
	echo '<pre>'; print_r($merge);
}


?>