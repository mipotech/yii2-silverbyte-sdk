<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqNationalityTranslations represents a request to translate nationality data from a specific language.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqNationalityTranslations extends ApiRequest
{
	/**
	 * @var int $languageID (optional)
	 */
	public $languageID;

	/**
	 * @var string $countryCode 
	 */
	public $countryCode;
	
	/**
	 * @var string $countryName 
	 */
	public $countryName;

}