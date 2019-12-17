<?php
/**
*	This file contains the Outside Spaces Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Outside Spaces Enum Class
*
*	Class for the different outside spaces.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class OutsideSpaces extends ValuesBase {

	const BackGarden = 29;
	const CommunalGarden = 30;
	const EnclosedGarden = 31;
	const FrontGarden = 32;
	const PrivateGarden = 33;
	const RearGarden = 34;
	const Terrace = 35;
	const Patio = 36;
}