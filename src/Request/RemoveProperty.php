<?php
/**
*	This file contains the Remove Property Request class.
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
use cameronredlet\onthemarketADF\Groups\PropertyRemove;

/**
*	Remove Property Class
*
*	Class for remove property request.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class RemoveProperty extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://realtime-api.onthemarket.com/v1/property/removeproperty';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://realtime-api.onthemarket.com/v1/property/removeproperty';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\PropertyRemove', 'required' => true)
	);
}
