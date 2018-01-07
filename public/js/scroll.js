(function() {
	"use strict";

	//variables
	var links = document.querySelectorAll(".navScroll");
	console.log(links);
	
	//functions
	function scrollNav(e) {
		// console.log("scrollNav fired");
		// console.log(e.currentTarget.id);
		e.preventDefault();
		var scrollSection = e.currentTarget.id;
		var scrollId = scrollSection.substring(2);
		var scrollLocation = "#"+scrollId;
		console.log(scrollLocation);
		TweenMax.to(window, 2, {scrollTo:{y:scrollLocation}});
	}


	//listeners
	for (var i=0; i<links.length; i++){
		links[i].addEventListener("click", scrollNav, false);
	}



})();
