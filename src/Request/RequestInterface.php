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

/**
*	Request Interface Class
*
*	Interface for all requests.
*
*	@package	cameronredlet\onthemarketADF
*
*/
interface RequestInterface {

	/**
	*	Get URL Method
	*
	*	Returns the correct URL for the enviroment.
	*	@return string
	*/
	public function getURL();
}