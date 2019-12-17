<?php
/**
*	This file contains the Conditions Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Conditions Enum Class
*
*	Class for the different Conditions.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Conditions extends ValuesBase {

	const Good = 1;
	const SomeWorkNeeded = 2;
	const WorkRequiredThroughout = 3;
	const MajorRenovationRequired = 4;
}