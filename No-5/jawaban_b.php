<?php
$buah = array(
      array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
      array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
      array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
      array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
      array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
      array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
      );

$kolom = array_column($data, 'NAMA');
while (($cari = array_search("K", $kolom)) != NULL) 
{ 
echo "Hasil pencarian : ".$cari;
echo "<br>";
unset($kolom[$cari]); 
} 
?>


