<?php
/**
*	This file contains the Export Period Group model class.
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
*	Export Period Group Class
*
*	Class to handle Export Period group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class ExportPeriod implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'start_date' => array('type' => 'datetime', 'format' => 'd-m-Y', 'required' => true),
		'end_date' => array('type' => 'datetime', 'format' => 'd-m-Y', 'required' => true)
	);
}