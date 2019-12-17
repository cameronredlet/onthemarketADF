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

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Tenure Types Enum Class
*
*	Class for the different tenure types.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class TenureTypes extends ValuesBase {

	const Freehold = 1;
	const Leasehold = 2;
	const Feudal = 3;
	const Commonhold = 4;
	const ShareOfFreehold = 5;
}