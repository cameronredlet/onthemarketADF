<?php
/**
*	This file contains the Heatings Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Heatings Enum Class
*
*	Class for the different Heating options.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Heatings extends ValuesBase {

	const AirConditioning = 1;
	const Central = 2;
	const DoubleGlazing = 3;
	const EcoFriendly = 4;
	const Electric = 5;
	const Gas = 6;
	const GasCentral = 7;
	const NightStorage = 8;
	const Oil = 9;
	const Solar = 10;
	const SolarWater = 11;
	const UnderFloor = 12;
}