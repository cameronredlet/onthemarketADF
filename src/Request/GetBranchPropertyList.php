<?php
/**
*	This file contains the Get Branch Property List Request model class.
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

/**
*	Get Branch Property List Class
*
*	Class for get branch property list request.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class GetBranchPropertyList extends RequestBase {

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = 'https://realtime-api.onthemarket.com/v1/property/getbranchpropertylist';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = 'https://realtime-api.onthemarket.com/v1/property/getbranchpropertylist';

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'network' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Network', 'required' => true),
		'branch' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Branch', 'required' => true)
	);
}
