const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const path = require('path');
module.exports = {
	...defaultConfig,
	entry: {
		'block1/block1': '/include/block-editor/blocks/block1',
		'block2/block2': '/include/block-editor/blocks/block2',
		'block3/block3': '/include/block-editor/blocks/block3'
		
	}
	
};