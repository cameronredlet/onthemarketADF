<?php
/**
*	This file contains the Export Period Time Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;

/**
*	Export Period Time Group Class
*
*	Class to handle Export Period Time group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class ExportPeriodTime implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'start_date_time' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'required' => true),
		'end_date_time' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'required' => true)
	);
}