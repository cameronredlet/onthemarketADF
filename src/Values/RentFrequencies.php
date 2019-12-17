<?php
/**
*	This file contains the Rent Frequencies Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Rent Frequencies Enum Class
*
*	Class for the different rent frequencies.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class RentFrequencies extends ValuesBase {

	const Yearly = 1;
	const Quarterly = 4;
	const Monthly = 12;
	const Weekly = 52;
	const Daily = 365;
}