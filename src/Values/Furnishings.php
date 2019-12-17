<?php
/**
*	This file contains the Furnishings Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Furnishings Enum Class
*
*	Class for the different Furnishing options.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Furnishings extends ValuesBase {

	const Furnished = 0;
	const PartFurnished = 1;
	const Unfurnished = 2;
	const FurnishedUnfurnished = 4;
}