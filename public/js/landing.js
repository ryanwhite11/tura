(function() {
"use strict";

	var sections = ["<img src='img/logo.png' alt='Tura Logo' id='landingLogo' class='align-self-center'><div class='buttonWhite d-sm-none' id='landingButton'><a href='#''>ORDER</a></div>", "<h3>control</h3><h2>MONITOR YOUR PLANTS FROM ANYWHERE</h2>", "<h3>knowledge</h3><h2>GATHER INFORMATION ABOUT YOUR PLANT'S HEALTH</h2>"];
	var buttons = document.querySelectorAll('.landingDot'),
		container = document.querySelector('#landingTextCon');


	function switchInfo(e){
		// e.preventDefault();
		//console.log(e.currentTarget.id.slice(4,5));
		var x = e.currentTarget.id.slice(4,5);
		container.innerHTML = sections[x];
		for (var i = 0; i < buttons.length; i++) {
			buttons[i].classList.remove('activeButton');
		}
		buttons[x].classList.add('activeButton');
	}


	for (var i = 0; i < buttons.length; i++) {
		buttons[i].addEventListener('click', switchInfo, false);
	}

})();
