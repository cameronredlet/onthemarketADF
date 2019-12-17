<?php
/**
*	This file contains the Statuses Enum class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Values;

use cameronredlet\onthemarketADF\Values\ValuesBase;

/**
*	Statuses Enum Class
*
*	Class for the different statuses.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Statuses extends ValuesBase {

	const Available = 1;
	const SSTC = 2;
	const SSTCM = 3;
	const UnderOffer = 4;
	const Reserved = 5;
	const LetAgreed = 6;
}