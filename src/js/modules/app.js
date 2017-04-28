module.exports = App;

var classes = require('dom-classes');
var select = require('dom-select');
var config = require('../config');
var anime = require('animejs');

/**
 * App
 */
function App() {
	if (!(this instanceof App)) {
		return new App();
	}

	console.log('Hello world 💛');

	classes.add(config.body.el, 'app--is-ready');

	var linkPath = select('.js-link-path');
	var linePath = select('.js-link-path .js-line');
	var lineLength = linePath.getTotalLength();
	
	linePath.style.strokeDashoffset = lineLength + 'px';
	linePath.setAttribute('stroke-dasharray', lineLength + 'px');

	var lineDrawing = anime({
		targets: linePath,
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutSine',
		duration: 300,
		direction: 'reverse',
		loop: false,
		autoplay: false
	});

	
	function lineDrawingIn() {

		lineDrawing.play();
		lineDrawing.reverse();
	}

	function lineDrawingOut() {
		lineDrawing.play();
		lineDrawing.reverse();
	}

	linkPath.addEventListener('mouseenter', lineDrawingIn);
	linkPath.addEventListener('mouseleave', lineDrawingOut);
}