(function() {
"use strict";
	
	var infoDot = document.querySelectorAll('.personalDot'),
		infoText = document.querySelector('#infoText'),
		infoHeader = document.querySelector('#infoHeader'),
		text = ['Never forget to care for your plants again, Tura is the only gardener you will ever need. With Tura, you can finally travel without worrying about your plants. Remotely water, feed and monitor your plants from any where in the world. Access the Tura app from any device and begin remotely gardening today.','Learn more about your plants with Tura. Gather information about your plants health and their environment to better take cae of your plants. With the Tura app you have your own botany lab on hand at any time.', 'TEST 3'],
		title = ['PERSONAL GARDENER', 'LEARN MORE', 'TEST TEXT'],
		popup = document.querySelector('#orderformCon'),
		orderLinks = document.querySelectorAll('.orderLink'),
		closeButton = document.querySelector('#closeForm'),
		body = document.querySelector('body');


	function switchInfo(e){
		// console.log(e.currentTarget);
		// console.log(infoDot);
		var id = e.currentTarget.id;
		var sliced = id.slice(4,5);
		infoText.innerHTML = text[sliced];
		infoHeader.innerHTML = title[sliced];
		for (var i = 0; i < infoDot.length; i++) {
			infoDot[i].classList.remove('activeDot');
		}
		infoDot[sliced].classList.add('activeDot');
	}

	function openPopup(e){
		popup.style.display = 'block';
		popup.style.opacity = '1';
	}

	function closePopup(e){
		popup.style.display = 'none';
		popup.style.opacity = '0';

	}

	for (var i = 0; i < infoDot.length; i++) {
		infoDot[i].addEventListener('click', switchInfo, false);
	}

	for (var i = 0; i < orderLinks.length; i++) {
		orderLinks[i].addEventListener('click', openPopup, false);
	}
	

	closeButton.addEventListener('click', closePopup, false);

	

})();
