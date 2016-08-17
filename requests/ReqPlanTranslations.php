<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqPlanTranslations represents a request to translate plan data from a specific langage.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqPlanTranslations extends ApiRequest
{
	/**
	 * @var int $languageID (optional)
	 */
	public $languageID;

	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;

	/**
	 * @var string $planCode
	 */
	public $planCode;
}