<?php 

$csvData = $_POST['csvData'];

function storeCsv($data, $fileName = 'updated-csv-file')
{
	if (empty($data)) {
	    return false;
	}

	# add headers for each column in the CSV download
	array_unshift($data, array_keys($data[0]));

	$fileName = time() . '-' . $fileName;
	$filePath = 'uploads/' . $fileName;

	$handle = fopen($filePath, 'w');
	foreach ($data as $row) {
	    fputcsv($handle, $row);
	}

	fclose($handle);
}

storeCsv( $csvData );