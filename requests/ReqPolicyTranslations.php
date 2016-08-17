<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqPolicyTranslations represents a request to translate policy data from a specific language.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqPolicyTranslations extends ApiRequest
{
	
	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
	
	/**
	 * @var int $languageID (optional)
	 */
	public $languageID;

	/**
	 * @var string $policyCode 
	 */
	public $policyCode;

}