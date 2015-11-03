var App = function () {

	var settings = {
		csvInput  : $('.csv-file'),
		reader    : new FileReader(),
		uploadUrl : 'uploader.php',
		document  : $(document)
	};

	function _processFile ( $input ) {
		var file = $input[0].files[0];

		settings.reader.readAsText(file, 'UTF-8');
		settings.reader.onload = _uploadFile;
	}

	function _uploadFile ( event ) {
		var result   = event.target.result,
			fileName = settings.csvInput[0].files[0].name;

		$.ajax({
			url: settings.uploadUrl,
			method: 'post',
			data: { data: result, fileName: fileName },
			beforeSend: function () {
				$('.csv-content').html('Please wait..');
			},
			success: function ( data ) {
				$('.csv-content').html( data );
			},
			error: function () {
				$('.csv-content').html('Unable to process the file. Please try again');
			}
		});
	}

	function _sortTable(header, index){
	 	var $tbody = $('table tbody');
	 	var order = $(header).attr('data-order');

	 	var sortedHtml = $tbody.find('tr').sort(function (a, b) {
		 	var tda = $(a).find('td:eq(' + index + ')').text();
		 	var tdb = $(b).find('td:eq(' + index + ')').text();
	    	//Order according to order type
	    	return (order === 'asc' ? (tda > tdb ? 1 : tda < tdb ? -1 : 0) : (tda < tdb ? 1 : tda > tdb ? -1 : 0));

		});

	 	$tbody.html( sortedHtml );
	}

	return {

		init: function () {
			this.bindUI();
		},

		bindUI: function () {

			settings.csvInput.on('change', function ( e ) {

				var $self = $(this);

				if ( $self.val() ) {
					_processFile( $self );
				};
			});

			settings.document.on('click', '.csv-content table thead th', function(){
			    //Add parameter for remembering order type
			    $(this).attr('data-order', ($(this).attr('data-order') === 'desc' ? 'asc':'desc'));
			   //Add aditional parameters to keep track column that was clicked
			   _sortTable(this, $('.csv-content table thead th').index(this));
			});
		}
	}
}