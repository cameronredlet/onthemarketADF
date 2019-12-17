<?php
/**
*	This file contains the Property Premium Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Groups\PremiumListing;


/**
*	Property Premium Group Class
*
*	Class to handle Property Premium group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class PropertyPremium implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'premium_listing' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\PremiumListing', 'required' => true)
	);
}