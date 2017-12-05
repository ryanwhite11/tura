(function() {
"use strict";

	var hamburger = document.querySelector('.hamburger'),
		mobileMenu = document.querySelector('#mobileMenu'),
		landing = document.querySelector('#mainLanding'),
		header = document.querySelector('#mainHeader'),
		menuItems = document.querySelectorAll("#mobileMenu li a");

		console.log(menuItems);

	function toggleMenu(e){
		//e.preventDefault();
		//console.log("CLICKED");
		hamburger.classList.toggle('openButton');
		mobileMenu.classList.toggle("openMenu");

	}


	function checkScroll(){
		var windowScroll = window.scrollY,
			height = landing.clientHeight;
		
		if (windowScroll > (height - 60)) {
			//console.log("CLICKED");
			header.style.background = 'rgba(105,119,105,1)';
		}else{
			header.style.background = 'rgba(0,0,0,0)';
		}
	}

	for(var i=0; i<menuItems.length; i++) {
		menuItems[i].addEventListener("click", toggleMenu, false);
	}

	window.addEventListener("scroll", checkScroll, false);
	window.addEventListener("onload", checkScroll, false);
	

	hamburger.addEventListener("click", toggleMenu, false);


})();
