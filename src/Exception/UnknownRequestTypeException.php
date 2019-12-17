<?php
/**
*	This file contains the Unknown Request Type Exception Class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Exception;

/**
*	Unknown Request Type Exception Class
*
*	Exception for an unknown request type.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class UnknownRequestTypeException extends \RuntimeException {

	/**
	*	Constructor
	*
	*	@return self
	*/
	public function __construct(){
		parent::__construct('Unknown Request Type.');
	}
}