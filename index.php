<!DOCTYPE html>
<html>
<head>
	<title>CSV Sorter</title>
</head>
<body>

	<h1>CSV Sorter</h1>
	<p>Upload your CSV file below</p>

	<input type="file" class="csv-file" name="csv_file">

	<div class="csv-content">
		
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/app.js" type="text/javascript"></script>

	<script type="text/javascript">
		var app = new App();
		app.init();
	</script>
</body>
</html>