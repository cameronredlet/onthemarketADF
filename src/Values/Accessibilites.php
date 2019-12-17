<?php
/**
*	This file contains the Accessibilites Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Accessibilites Enum Class
*
*	Class for the different Accessibility options.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Accessibilites extends ValuesBase {

	const NotSuitableForWheelchairUsers = 42;
	const LevelAccess = 37;
	const LiftAccess = 38;
	const RampedAccess = 39;
	const WetRoom = 40;
	const WideDoorways = 41;
}