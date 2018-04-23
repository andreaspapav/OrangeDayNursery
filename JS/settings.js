$(document).ready(function() {
	$('[name="lang3"]').on('click', function () {
		var id = $(this).attr('id');
		var language = id.slice(0, -1);

		$('[name="lang1"]').prop('disabled', false);
		$('[name="lang2"]').prop('disabled', false);

		$('#'+language+"1").prop('disabled', true).prop('checked', false);
		$('#'+language+"2").prop('disabled', true).prop('checked', false);
	});
});