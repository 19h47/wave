var select = require('dom-select');

/**
 * Config object
 * 
 * global shared variables
 */
var config = {

	body: {
		el: select('body'),
	},
	
	html: {
		el: select('html'),
	},
}

module.exports = config;