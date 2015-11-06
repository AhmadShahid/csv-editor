<!DOCTYPE html>
<html>
<head>
	<title>CSV Editor</title>
	<style type="text/css">
		* { margin: 0; padding: 0; }
		body { font-size: 14px; font-family: sans-serif; line-height: 30px; }
		.page-wrap { display: block; padding: 30px; }
		h1 { padding-bottom: 10px; border-bottom: 1px solid #ccc; margin-bottom: 10px; }
		.csv-content { margin-top: 20px; }
		table { table-layout: fixed; border-collapse: collapse; }
		tr th { padding: 5px 10px; background: #ccc; cursor: pointer;}
		tr td { border: 1px solid #ccc; padding: 0 10px; }
		table tbody tr:nth-child(even) { background-color: whitesmoke; }
		.action-btns { margin-top: 15px; }
		td:focus { outline: 1px dashed black; background: #ccc; }
		.csv-content ul { line-height: 20px; margin: 20px 15px; }
		.default-table .header-2 .up_arrow {position: static;display: inline-block !important;vertical-align: middle;height: 14px;margin: -3px 0 0 15px;}
		.dwn_arrow {  background-image: url("images/drop_arrow.png");background-repeat: no-repeat;height: 10px;   right: 0px;top: 15px;width: 11px;display: inline-block;vertical-align: middle;position: absolute;}
  		.sortWhat{  display: inline-block;position: relative;}
  		.up_arrow {  background-image: url("images/up_arrow.png");background-repeat: no-repeat;height: 10px;width: 14px;display: inline-block;vertical-align: middle;position: static; margin: -7px 0 0 10px;}
		.inlineD {display: inline-block !important;}
		.hidden { visibility: hidden;}
		.show { visibility: visible;}
		.t11{top: 11px}
		.t13{top: 13px}
		.t8{top: 8px}
	</style>
</head>
<body>

	<div class="page-wrap">
		<h1>CSV Editor</h1>

		<div class="uploader-content">
			<p>Upload your CSV file below</p>
			<input type="file" class="csv-file" name="csv_file">
		</div>

		<div class="csv-content">
			
		</div>

		<div class="action-btns" style="display: none;">
			<a class="gen-csv" href="generate-csv.php">Download Updated CSV</a>		
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/app.js" type="text/javascript"></script>

	<script type="text/javascript">
		var app = new App();
		app.init();
	</script>
</body>
</html>
