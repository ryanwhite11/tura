(function() {
	"use strict";

	//variables
	var graph = document.querySelector("#pinkGraphSvg");
	
	//functions
	function spin(){

		// console.log(graph);
		TweenMax.fromTo(graph, 5, {rotation: 170},{rotation: -315,delay: 1,repeat: -1,repeatDelay: 0.5, yoyo: true});
	}

	window.addEventListener("load", spin, false);


})();


// TweenMax.fromTo('#box', 1, {rotation: 20, },{rotation: -20, delay: 1, repeat: -1, repeatDelay: 1, yoyo: true, immediateRender:false});