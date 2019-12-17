<?php
/**
*	This file contains the Parkings Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Parkings Enum Class
*
*	Class for the different parking options.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Parkings extends ValuesBase {

	const Allocated = 13;
	const Communal = 14;
	const Covered = 15;
	const Garage = 16;
	const Driveway = 17;
	const Gated = 18;
	const OffStreet = 19;
	const OnStreet = 20;
	const Rear = 21;
	const Permit = 22;
	const PrivateParking = 23;
	const Residents = 24;
}