<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqCityTranslations represents a request to translate city data from a specific language.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqCityTranslations extends ApiRequest
{
	/**
	 * @var int $languageID (optional)
	 */
	public $languageID;
	
	/**
	 * @var string $cityCode 
	 */
	public $cityCode;

	/**
	 * @var string $cityName 
	 */
	public $cityName;

}