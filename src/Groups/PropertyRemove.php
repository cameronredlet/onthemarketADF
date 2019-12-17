<?php
/**
*	This file contains the Property Remove Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Values\RemovalReasons;

/**
*	Property Remove Group Class
*
*	Class to handle Property group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class PropertyRemove implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'removal_reason' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\RemovalReasons'),
		'transaction_date' => array('type' => 'datetime', 'format' => 'd-m-Y G:i:s', 'autoinit' => false)
	);
}