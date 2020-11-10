<?php
error_reporting(0);
$data = [20,10,100,30,15,5];
unset($data[3]);
echo "<pre>";
print_r($data);
echo "</pre>";