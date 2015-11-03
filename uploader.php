<?php

$data = $_POST['data'];
$fileName = $_POST['fileName'];
$serverFile = time().$fileName;

$filePath = 'uploads/'.$serverFile;

$fp = fopen($filePath,'w'); //Prepends timestamp to prevent overwriting
fwrite($fp, $data);
fclose($fp);


$file    = fopen($filePath, 'r');
$csvData = [];

while (($line = fgetcsv($file)) !== FALSE) {
  $csvData[] = $line;
}

fclose($file);