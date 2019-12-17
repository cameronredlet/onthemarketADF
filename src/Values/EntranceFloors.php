<?php
/**
*	This file contains the Entrance Floors Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Entrance Floors Enum Class
*
*	Class for the different entrance floors.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class EntranceFloors extends ValuesBase {

	const Basement = 1;
	const GroundFloor = 2;
	const FirstFloor = 3;
	const SecondFloor = 4;
	const HigherThan2ndFloorNoLift = 5;
	const HigherThan2ndFloorWithLift = 6;
}