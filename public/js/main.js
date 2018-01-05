(function() {
"use strict";
	
	var infoDot = document.querySelectorAll('.personalDot'),
		infoText = document.querySelector('#infoText'),
		infoHeader = document.querySelector('#infoHeader'),
		text = ['Tura is the only gardener you will ever need. With Tura, you can finally travel without worrying about your plants. Remotely water, feed and monitor your plants from any where in the world. Access the Tura app from any device and begin remotely gardening today.','Learn more about your plants with Tura. Gather information about your plants health and their environment to better take cae of your plants. With the Tura app you have your own botany lab on hand at any time.', 'Tura combines two major forces, science and nature. Tura allows you to dig deeper(pun intended) into the inner workings of your plant’s eco system. Doing this allows for optimal plant health and growth.'],
		title = ['your personal gardener', 'learn more about your plants', 'combining science and nature'],
		popup = document.querySelector('#orderformCon'),
		popupBlur = document.querySelector('#orderFormBlur'),
		orderLinks = document.querySelectorAll('.orderLink'),
		anchor = document.querySelectorAll('.orderLink a'),
		closeButton = document.querySelector('#closeForm'),
		body = document.querySelector('body');

	function switchInfo(e){
		// console.log(e.currentTarget);
		// console.log(infoDot);
		var id = e.currentTarget.id;
		var sliced = id.slice(4,5);
		infoText.style.opacity = "0";
		infoHeader.style.opacity = "0";
		infoText.innerHTML = text[sliced];
		infoHeader.innerHTML = title[sliced];

		for (var i = 0; i < infoDot.length; i++) {
			infoDot[i].classList.remove('activeDot');
		}

		infoDot[sliced].classList.add('activeDot');
		TweenMax.to([infoText, infoHeader], 1, {opacity:1});
	}

	function openPopup(e){
		popupBlur.style.display = 'block';
		TweenMax.to(popupBlur, 0.3, {opacity: 1});
		popup.style.display = 'block';
		popup.style.opacity = '1';

	}

	function closePopup(e){
		popup.style.display = 'none';
		popup.style.opacity = '0';
		popupBlur.style.display = 'none';
		popupBlur.style.opacity = '0';

	}

	function prevent (e) {
       console.log("working");
       e.preventDefault();
   	};



	for (var i = 0; i < infoDot.length; i++) {
		infoDot[i].addEventListener('click', switchInfo, false);
	}

	for (var i = 0; i < orderLinks.length; i++) {
		orderLinks[i].addEventListener('click', openPopup, false);
	}

	for (var i = 0; i < anchor.length; i++) {
		anchor[i].addEventListener('click', prevent, false);
	}

	closeButton.addEventListener('click', closePopup, false);	
	popupBlur.addEventListener('click', closePopup, false);

	

})();
