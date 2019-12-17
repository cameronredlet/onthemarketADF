<?php
/**
*	This file contains the onthemarketADF class.
*
*	@package	cameronredlet\onthemarketADF
*	@author		Jacob Wyke <jacob@cameronredlet.com>
*	@license	MIT
*
*/

namespace cameronredlet\onthemarketADF;

use cameronredlet\Synthesize\Synthesizer;
use cameronredlet\onthemarketADF\Exception\UnknownRequestTypeException;
use cameronredlet\onthemarketADF\Curl;
use cameronredlet\onthemarketADF\Request\SendProperty;
use cameronredlet\onthemarketADF\Request\RemoveProperty;
use cameronredlet\onthemarketADF\Request\GetBranchPropertyList;
use cameronredlet\onthemarketADF\Request\AddPremiumListing;
use cameronredlet\onthemarketADF\Request\AddFeaturedProperty;
use cameronredlet\onthemarketADF\Request\RemoveFeaturedProperty;
use cameronredlet\onthemarketADF\Request\GetPropertyPerformance;
use cameronredlet\onthemarketADF\Request\GetBranchPerformance;
use cameronredlet\onthemarketADF\Request\GetBrandEmails;
use cameronredlet\onthemarketADF\Request\GetBranchEmails;
use cameronredlet\onthemarketADF\Request\GetBrandPhoneLeads;
use cameronredlet\onthemarketADF\Request\GetBranchPhoneLeads;
use cameronredlet\onthemarketADF\Request\GetPropertyEmails;

/**
*	onthemarketADF Class
*
*	Class for the onthemarketADF.
*
*	@package	cameronredlet\onthemarketADF
*
*/
class onthemarketADF {

	use Synthesizer;

	const TEST = 0;
	const LIVE = 1;
	const DEBUG = 1;

	const SendProperty = 1;
	const RemoveProperty = 2;
	const GetBranchPropertyList = 3;
	const AddPremiumListing = 4;
	const AddFeaturedProperty = 5;
	const RemoveFeaturedProperty = 6;
	const GetPropertyPerformance = 7;
	const GetBranchPerformance = 8;
	const GetBrandEmails = 9;
	const GetBranchEmails = 10;
	const GetBrandPhoneLeads = 11;
	const GetBranchPhoneLeads = 12;
	const GetPropertyEmails = 13;

	/**
	*	@var array $arrSynthesize The synthesize array.
	*/
	protected $arrSynthesize = array(
		'cert_file' => array('type' => 'string'),
		'cert_pass' => array('type' => 'string'),
		'environment' => array('type' => 'int', 'min' => 0, 'max' => 1, 'default' => onthemarketADF::TEST)
	);

	/**
	*	Class Constructor
	*
	*	Class constructure which accepts the certificate file, password and enviroment.
	*	@param string $strCertFile The certificate file.
	*	@param string $strCertPass The certificate password.
	*	@param int $numEnvironment The environment to run in.
	*	@return self
	*/
	public function __construct($strCertFile, $strCertPass, $numEnvironment = onthemarketADF::TEST){
		$this->cert_file = $strCertFile;
		$this->cert_pass = $strCertPass;
		$this->environment = $numEnvironment;
	}

	/**
	*	Create Request Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public static function createRequest($numRequestType){
		switch($numRequestType){
			case onthemarketADF::SendProperty:
				return new SendProperty();
				break;
			case onthemarketADF::RemoveProperty:
				return new RemoveProperty();
				break;
			case onthemarketADF::GetBranchPropertyList:
				return new GetBranchPropertyList();
				break;
			case onthemarketADF::AddPremiumListing:
				return new AddPremiumListing();
				break;
			case onthemarketADF::AddFeaturedProperty:
				return new AddFeaturedProperty();
				break;
			case onthemarketADF::RemoveFeaturedProperty:
				return new RemoveFeaturedProperty();
				break;
			case onthemarketADF::GetPropertyPerformance:
				return new GetPropertyPerformance();
				break;
			case onthemarketADF::GetBranchPerformance:
				return new GetBranchPerformance();
				break;
			case onthemarketADF::GetBrandEmails:
				return new GetBrandEmails();
				break;
			case onthemarketADF::GetBranchEmails:
				return new GetBranchEmails();
				break;
			case onthemarketADF::GetBrandPhoneLeads:
				return new GetBrandPhoneLeads();
				break;
			case onthemarketADF::GetBranchPhoneLeads:
				return new GetBranchPhoneLeads();
				break;
			case onthemarketADF::GetPropertyEmails:
				return new GetPropertyEmails();
				break;
			default:
				throw new UnknownRequestTypeException();
				break;
		}
	}

	/**
	*	Send Method
	*
	*	Returns the request object for the given request type.
	*	@param int $numRequestType The request type.
	*	@return object
	*/
	public function send($objRequest, $strURLOverride = '', $boolDebug = false){
		$strURL = ($strURLOverride) ? $strURLOverride : $objRequest->getURL($this->environment);

		return Curl::send(json_encode($objRequest), $strURL, $this->cert_file, $this->cert_pass, $boolDebug);
	}
}