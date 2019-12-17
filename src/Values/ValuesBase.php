<?php
/**
*	This file contains the Tenure Types Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use MyCLabs\Enum\Enum;

/**
*	Tenure Types Enum Class
*
*	Class for the different tenure types.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class ValuesBase extends Enum implements \JsonSerializable  {

	/**
	*	JSON Serialise Method
	*
	*	Method for the \JsonSerializable Interface.
	*	@return mixed
	*/
	public function jsonSerialize(){
		return $this->getValue();
	}
}