<?php
/**
*	This file contains the Room Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Values\DimensionUnits;

/**
*	Room Group Class
*
*	Class to handle Room group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Room implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'room_name' => array('type' => 'string', 'required' => true, 'max' => 120),
		'room_description' => array('type' => 'string', 'max' => 1000),
		'room_length' => array('type' => 'number', 'min' => 0),
		'room_width' => array('type' => 'number', 'min' => 0),
		'room_dimension_unit' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\DimensionUnits'),
		'room_dimension_text' => array('type' => 'string', 'max' => 120),
		'room_photo_urls' => array('type' => 'objectarray', 'class' => 'cameronredlet\Synthesize\Type\StringObject', 'max' => 10),
	);
}