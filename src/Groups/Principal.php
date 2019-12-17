<?php
/**
*	This file contains the Principal Group model class.
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
*	Principal Group Class
*
*	Class to handle Principal group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Principal implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'principal_email_address' => array('type' => 'string', 'required' => true, 'max' => 200),
		'auto_email_when_live' => array('type' => 'boolean'),
		'auto_email_updates' => array('type' => 'boolean')
	);
}