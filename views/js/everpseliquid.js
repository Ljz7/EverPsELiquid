$(document).ready(function() {
	$('#').on('input', 'input:text', function() {
		var nicotine = $('#').val();
		var quantity = $('#').val();
		if (nicotine && quantity) {
			if (!quantity <= 0) {
				if (!nicotine <= 0 || !nicotine > 20) {

				}
			} else {

			}
		}
	});
});
