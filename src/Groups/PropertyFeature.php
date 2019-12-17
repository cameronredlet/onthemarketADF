<?php
/**
*	This file contains the Property Feature Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Groups\FeaturedProperty;

/**
*	Property Feature Group Class
*
*	Class to handle Property group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class PropertyFeature implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'featured_property' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\FeaturedProperty', 'required' => true)
	);
}