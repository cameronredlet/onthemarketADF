<?php
/**
*	This file contains the Add Featured Property Request model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Request;

use cameronredlet\onthemarketADF\Request\RequestBase;
use cameronredlet\onthemarketADF\Groups\Network;
use cameronredlet\onthemarketADF\Groups\Branch;
use cameronredlet\onthemarketADF\Groups\PropertyFeature;

/**
*	Add Featured Property Class
*
*	Class for the add featured property request.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class AddFeaturedProperty extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/addfeaturedproperty';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/addfeaturedproperty';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\PropertyFeature', 'required' => true)
	);
}