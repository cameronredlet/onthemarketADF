<?php
/**
*	This file contains the Address Group model class.
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
*	Address Group Class
*
*	Class to handle Address group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Address implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'house_name_number' => array('type' => 'string', 'required' => true, 'max' => 60),
		'address_2' => array('type' => 'string', 'max' => 60),
		'address_3' => array('type' => 'string', 'max' => 60),
		'address_4' => array('type' => 'string', 'max' => 60),
		'town' => array('type' => 'string', 'required' => true, 'max' => 60),
		'postcode_1' => array('type' => 'string', 'required' => true, 'max' => 4),
		'postcode_2' => array('type' => 'string', 'required' => true, 'max' => 3),
		'display_address' => array('type' => 'string', 'required' => true, 'max' => 120),
		'latitude' => array('type' => 'float', 'max' => 90.0, 'min' => -90.0),
		'longitude' => array('type' => 'float', 'max' => 180.0, 'min' => -180.0),
		'pov_latitude' => array('type' => 'float', 'max' => 90.0, 'min' => -90.0),
		'pov_longitude' => array('type' => 'float', 'max' => 180.0, 'min' => -180.0),
		'pov_pitch' => array('type' => 'float', 'max' => 180.0, 'min' => -180.0),
		'pov_heading' => array('type' => 'float', 'max' => 360.0, 'min' => -360.0),
		'pov_zoom' => array('type' => 'int')
	);
}