<?php
/**
*	This file contains the Removal Reasons Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Removal Reasons Enum Class
*
*	Class for the different removal reasons.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class RemovalReasons extends ValuesBase {

	const SoldByUs = 7;
	const SoldByAnotherAgent = 8;
	const WithdrawnFromMarket = 9;
	const LostInstruction = 10;
	const Removed = 11;
	const LetByUs = 12;
}