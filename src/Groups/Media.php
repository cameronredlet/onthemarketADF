<?php
/**
*	This file contains the Media Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Values\MediaTypes;

/**
*	Media Group Class
*
*	Class to handle Media group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Media implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'media_type' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\MediaTypes', 'required' => true),
		'media_url' => array('type' => 'string', 'required' => true, 'max' => 250),
		'caption' => array('type' => 'string', 'max' => 50),
		'sort_order' => array('type' => 'int', 'min' => 0),
		'media_update_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s', 'autoinit' => false)
	);
}