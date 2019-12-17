<?php
/**
*	This file contains the Brand Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;

/**
*	Brand Group Class
*
*	Class to handle Brand group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Brand implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'brand_id' => array('type' => 'int', 'required' => true)
	);
}