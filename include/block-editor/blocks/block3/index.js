
import { registerBlockType } from '@wordpress/blocks';

import './style.scss';

import Edit from './edit';
import save from './save';
import json from './block.json'

const {name, ...settings} = json;
registerBlockType(name, {

	...settings,
	edit: Edit,
	save,
} );
