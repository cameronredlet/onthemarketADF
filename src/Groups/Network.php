<?php
/**
*	This file contains the Network Group model class.
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
*	Network Group Class
*
*	Class to handle Network group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Network implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'network_id' => array('type' => 'int', 'required' => true)
	);
}