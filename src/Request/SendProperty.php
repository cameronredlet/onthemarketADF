<?php
/**
*	This file contains the Send Property Request class.
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
use cameronredlet\onthemarketADF\Groups\Property;

/**
*	Send Property Class
*
*	Class for the send property request.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class SendProperty extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://realtime-api.onthemarket.com/v1/property/sendpropertydetails';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://realtime-api.onthemarket.com/v1/property/sendpropertydetails';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Property', 'required' => true)
	);
}
