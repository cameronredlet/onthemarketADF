<?php
/**
*	This file contains the Media Types Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Media Types Enum Class
*
*	Class for the different media types.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class MediaTypes extends ValuesBase {

	const Image = 1;
	const Floorplan = 2;
	const Brochure = 3;
	const VirtualTour = 4;
	const AudioTour = 5	;
	const EPC = 6;
	const EPCGraph = 7;
}