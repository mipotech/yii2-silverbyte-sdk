<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqPriceCodeTranslations represents a request to translate price code data from a specific language.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqPriceCodeTranslations extends ApiRequest
{
	/**
	 * @var int $languageID (optional)
	 */
	public $languageID;

	/**
	 * @var string $priceCode
	 */
	public $priceCode;

	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
}
