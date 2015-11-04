<?php

$data = $_POST['data'];
$fileName = $_POST['fileName'];
$serverFile = time().$fileName;

$filePath = 'temp/'.$serverFile;

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
	$table = '<p>Click table headings to sort the table by column.</p>';
	$table .= '<p>Click any of the table elements to edit them</p><table>';
	$colTag = 'td';

	foreach ($csvData as $counter => $tableRow) {
		if ( $counter === 0 ) {
			$table .= '<thead><tr>';

			foreach ($tableRow as $tableItem) {
				$table .= '<th>' . $tableItem . '</th>';
			}

			$table .= '<th>Action</th></tr></thead>';
		} else {

			if ( $counter === 1 ) {
				$table .= '<tbody>';
			}

			$table .= '<tr>';

			foreach ($tableRow as $tableItem) {
				$table .= '<td contenteditable="true">' . $tableItem . '</td>';
			}

			$table .= '<td><a class="delete-row" href="#">Delete</a></td></tr>';
		}
	}

	$table .= '</tbody>';
	$table .= '</table>';

	echo $table;
}