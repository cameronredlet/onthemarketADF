<?php
/**
*	This file contains the Premium Listing Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Values\DisplayTypes;
use cameronredlet\onthemarketADF\Values\StampTexts;

/**
*	Premium Listing  Group Class
*
*	Class to handle Premium Listing group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class PremiumListing implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'display_type' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\DisplayTypes', 'required' => true),
		'resale_stamp_text' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\StampTexts'),
		'lettings_stamp_text' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\StampTexts'),
		'web_flag' => array('type' => 'boolean', 'default' => false, 'required' => true),
		'mobile_flag' => array('type' => 'boolean', 'default' => false, 'required' => true)
	);
}