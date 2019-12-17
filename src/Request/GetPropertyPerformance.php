<?php
/**
*	This file contains the Get Property Performance Request model class.
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
use cameronredlet\onthemarketADF\Groups\PropertyRef;
use cameronredlet\onthemarketADF\Groups\ExportPeriod;

/**
*	Get Property Property List Class
*
*	Class for get property performance request.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class GetPropertyPerformance extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/getpropertyperformance';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/getpropertyperformance';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Branch', 'required' => true),
		'property' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\PropertyRef', 'required' => true),
		'export_period' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\ExportPeriod', 'required' => true)
	);
}