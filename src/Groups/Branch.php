<?php
/**
*	This file contains the Branch Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Values\Channels;

/**
*	Branch Group Class
*
*	Class to handle Branch group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Branch implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'branch_id' => array('type' => 'int', 'required' => true),
		'channel' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\Channels', 'required' => true),
		'overseas' => array('type' => 'boolean')
	);
}