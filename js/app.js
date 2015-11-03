var App = function () {

	var settings = {
		csvInput  : $('.csv-file'),
		reader    : new FileReader(),
		uploadUrl : 'uploader.php'
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
			data: { data: result, name: fileName },
			beforeSend: function () {

			},
			success: function () {

			},
			complete: function () {

			},
			error: function () {

			}
		});
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

		}
	}
}