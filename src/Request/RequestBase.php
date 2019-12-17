<?php
/**
*	This file contains the Request Interface class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Request;

use cameronredlet\onthemarketADF\Request\RequestInterface;
use cameronredlet\onthemarketADF\onthemarketADF;
use cameronredlet\Synthesize\Synthesizer;

/**
*	Request Interface Class
*
*	Interface for all requests.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class RequestBase implements RequestInterface, \JsonSerializable {

	use Synthesizer;

	/**
	*	@var string $_strLiveURL The live request URL.
	*/
	protected $_strLiveURL = '';

	/**
	*	@var string $_strTestURL The test request URL.
	*/
	protected $_strTestURL = '';

	/**
	*	Get URL Method
	*
	*	Returns the correct URL for the environment.
	*	@param int $numEnvironment The environment we are in.
	*	@return string
	*/
	public function getURL($numEnvironment = onthemarketADF::TEST){
		return ($numEnvironment==onthemarketADF::LIVE) ? $this->_strLiveURL : $this->_strTestURL;
	}
}