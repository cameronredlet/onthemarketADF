<?php
/**
*	This file contains the Details Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Values\Parkings;
use cameronredlet\onthemarketADF\Values\OutsideSpaces;
use cameronredlet\onthemarketADF\Values\AreaUnits;
use cameronredlet\onthemarketADF\Values\EntranceFloors;
use cameronredlet\onthemarketADF\Values\Conditions;
use cameronredlet\onthemarketADF\Values\Accessibilities;
use cameronredlet\onthemarketADF\Values\Heatings;
use cameronredlet\onthemarketADF\Values\Furnishings;
use cameronredlet\onthemarketADF\Values\CommercialuseClasses;
use cameronredlet\onthemarketADF\Groups\Room;

/**
*	Details Group Class
*
*	Class to handle Details group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Details implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'summary' => array('type' => 'string', 'required' => true, 'max' => 1000),
		'description' => array('type' => 'string', 'required' => true, 'max' => 32000),
		'features' => array('type' => 'objectarray', 'class' => 'cameronredlet\Synthesize\Type\StringObject', 'max' => 10),
		'bedrooms' => array('type' => 'int', 'required' => true, 'min' => 0),
		'bathrooms' => array('type' => 'int', 'min' => 0),
		'reception_rooms' => array('type' => 'int', 'min' => 0),
		'parking' => array('type' => 'objectarray', 'class' => 'cameronredlet\onthemarketADF\Values\Parkings'),
		'outside_space' => array('type' => 'objectarray', 'class' => 'cameronredlet\onthemarketADF\Values\OutsideSpaces'),
		'year_built' => array('type' => 'int'),
		'internal_area' => array('type' => 'number'),
		'internal_area_unit' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\AreaUnits'),
		'land_area' => array('type' => 'number'),
		'land_area_unit' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\AreaUnits'),
		'minimum' => array('type' => 'int', 'min' => 0),
		'maximum' => array('type' => 'int', 'min' => 0),
		'area_unit' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\AreaUnits'),
		'floors' => array('type' => 'int'),
		'entrance_floor' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\EntranceFloors'),
		'condition' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\Conditions'),
		'accessibility' => array('type' => 'objectarray', 'class' => 'cameronredlet\onthemarketADF\Values\Accessibilites'),
		'heating' => array('type' => 'objectarray', 'class' => 'cameronredlet\onthemarketADF\Values\Heatings'),
		'furnished_type' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\Furnishings'),
		'pets_allowed' => array('type' => 'boolean'),
		'smokers_considered' => array('type' => 'boolean'),
		'housing_benefit_considered' => array('type' => 'boolean'),
		'sharers_considered' => array('type' => 'boolean'),
		'burglar_alarm' => array('type' => 'boolean'),
		'washing_machine' => array('type' => 'boolean'),
		'dishwasher' => array('type' => 'boolean'),
		'all_bills_inc' => array('type' => 'boolean'),
		'water_bill_inc' => array('type' => 'boolean'),
		'gas_bill_inc' => array('type' => 'boolean'),
		'electricity_bill_inc' => array('type' => 'boolean'),
		'oil_bill_inc' => array('type' => 'boolean'),
		'council_tax_inc' => array('type' => 'boolean'),
		'tv_licence_inc' => array('type' => 'boolean'),
		'sat_cable_tv_bill_inc' => array('type' => 'boolean'),
		'internet_bill_inc' => array('type' => 'boolean'),
		'business_for_sale' => array('type' => 'boolean'),
		'comm_use_class' => array('type' => 'objectarray', 'class' => 'cameronredlet\onthemarketADF\Values\CommercialuseClasses'),
		'rooms' => array('type' => 'objectarray', 'class' => 'cameronredlet\onthemarketADF\Groups\Room', 'max' => 99)
	);
}