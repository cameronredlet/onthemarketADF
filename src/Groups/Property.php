<?php
/**
*	This file contains the Property Group model class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF\Groups;

use cameronredlet\onthemarketADF\Groups\GroupInterface;
use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Groups\Address;
use cameronredlet\onthemarketADF\Groups\Price;
use cameronredlet\onthemarketADF\Groups\Details;
use cameronredlet\onthemarketADF\Groups\Principal;
use cameronredlet\onthemarketADF\Values\PropertyTypes;
use cameronredlet\onthemarketADF\Values\Statuses;
use cameronredlet\onthemarketADF\Values\LetTypes;

/**
*	Property Group Class
*
*	Class to handle Property group.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class Property implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'agent_ref' => array('type' => 'string', 'required' => true, 'max' => 80),
		'published' => array('type' => 'boolean', 'required' => true),
		'property_type' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\PropertyTypes', 'required' => true),
		'status' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\Statuses', 'required' => true),
		'new_home' => array('type' => 'boolean'),
		'student_property' => array('type' => 'boolean'),
		'house_flat_share' => array('type' => 'boolean'),
		'create_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'update_date' => array('type' => 'datetime', 'format' => 'd-m-Y H:i:s', 'autoinit' => false),
		'date_available' => array('type' => 'datetime', 'format' => 'd-m-Y', 'autoinit' => false),
		'contract_months' => array('type' => 'int'),
		'minimum_term' => array('type' => 'int'),
		'let_type' => array('type' => 'enum', 'class' => 'cameronredlet\onthemarketADF\Values\LetTypes'),
		'address' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Address', 'required' => true),
		'price_information' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Price', 'required' => true),
		'details' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Details', 'required' => true),
		'media' => array('type' => 'objectarray', 'class' => 'cameronredlet\onthemarketADF\Groups\Media', 'max' => 999),
		'principal' => array('type' => 'object', 'class' => 'cameronredlet\onthemarketADF\Groups\Principal')
	);
}