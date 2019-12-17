<?php
/**
*	This file contains the Get Brand Phone Leads Request model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Request;

use cameronredlet\onthemarketADF\Request\RequestBase;
use cameronredlet\onthemarketADF\Groups\Network;
use cameronredlet\onthemarketADF\Groups\Brand;
use cameronredlet\onthemarketADF\Groups\ExportPeriodTime;

/**
*	Get Brand Phone Leads Class
*
*	Class for the get brand phone leads request.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class GetBrandPhoneLeads extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://adfapi.rightmove.co.uk/v1/property/getbrandphoneleads';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://adfapi.adftest.rightmove.com/v1/property/getbrandphoneleads';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Network', 'required' => true),
		'brand' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Brand', 'required' => true),
		'export_period' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\ExportPeriodTime', 'required' => true)
	);
}