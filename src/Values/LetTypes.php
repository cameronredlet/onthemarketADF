<?php
/**
*	This file contains the Let Types Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Let Types Enum Class
*
*	Class for the different let types.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class LetTypes extends ValuesBase {

	const LongTerm = 1;
	const ShortTerm = 2;
	const Commercial = 4;
	const NotSpecified = 0;
}