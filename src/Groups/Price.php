<?php
/**
*	This file contains the Price Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Values\PriceQualifiers;
use cameronredlet\onthemarketADF\Values\RentFrequencies;
use cameronredlet\onthemarketADF\Values\TenureTypes;

/**
*	Price Group Class
*
*	Class to handle Price group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Price implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'price' => array('type' => 'number', 'required' => true, 'min' => 1),
		'price_qualifier' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\PriceQualifiers'),
		'deposit' => array('type' => 'number'),
		'administration_fee' => array('type' => 'string', 'max' => 4000),
		'rent_frequency' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\RentFrequencies'),
		'tenure_type' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\TenureTypes'),
		'auction' => array('type' => 'boolean'),
		'tenure_unexpired_years' => array('type' => 'int'),
		'price_per_unit_area' => array('type' => 'number'),
		'price_per_unit_per_annum' => array('type' => 'number')
	);
}