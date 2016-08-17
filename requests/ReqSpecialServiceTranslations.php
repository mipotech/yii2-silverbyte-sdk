<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqSpecialServiceTranslations represents a request to translate special service data from a specific language.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqSpecialServiceTranslations extends ApiRequest
{
	/**
	 * @var int $languageID (optional)
	 */
	public $languageID;

	/**
	 * @var string $code
	 */
	public $code;
	
	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;

}