<?php
/**
*	This file contains the Featured Property Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Values\FeaturedPropertyTypes;

/**
*	Featured Property Group Class
*
*	Class to handle Featured Property group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class FeaturedProperty implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'featured_property_type' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\FeaturedPropertyTypes', 'required' => true)
	);
}