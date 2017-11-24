(function() {
"use strict";

	var hamburger = document.querySelector('.hamburger');

	function toggleMenu(e){
		console.log("CLICKED");
		hamburger.classList.toggle('openButton');
	}

	hamburger.addEventListener("click", toggleMenu, false);


})();
