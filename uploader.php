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

if ( !empty( $csvData )) {
	$table = '<table>';
	$colTag = 'td';

	foreach ($csvData as $counter => $tableRow) {
		if ( $counter === 0 ) {
			$table .= '<thead><tr>';

			foreach ($tableRow as $tableItem) {
				$table .= '<th>' . $tableItem . '</th>';
			}

			$table .= '</tr></thead>';
		} else {

			if ( $counter === 1 ) {
				$table .= '<tbody>';
			}

			$table .= '<tr>';

			foreach ($tableRow as $tableItem) {
				$table .= '<td>' . $tableItem . '</td>';
			}

			$table .= '</tr>';
		}
	}

	$table .= '</tbody>';
	$table .= '</table>';

	echo $table;
}