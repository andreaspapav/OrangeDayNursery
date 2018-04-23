$(document).ready(function() {
	var audio = new Audio("./sounds/multimedia_button_click_013.mp3");

	$('.buttonWithSound').on('click', function() {
		if (getCookie('soundFXToggle') !== 'on') {
			return;
		}
		
		audio.play();
	});
});