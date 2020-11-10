<?php

    $data = array("AKU","SUKA","MAKAN","NASI","PADANG");
    echo("Saya suka warna ");
    foreach($data as $x=>$y)
    {
		if($x<3)
		{
			echo($y.", ");
		}
		else 
		{
			echo("dan ".$y);
		}
    }
?>