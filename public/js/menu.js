(function() {
"use strict";

	var hamburger = document.querySelector('.hamburger'),
		mobileMenu = document.querySelector('#mobileMenu');

	function toggleMenu(e){
		e.preventDefault();
		//console.log("CLICKED");
		hamburger.classList.toggle('openButton');
		mobileMenu.classList.toggle("openMenu");

	}

	hamburger.addEventListener("click", toggleMenu, false);


})();
