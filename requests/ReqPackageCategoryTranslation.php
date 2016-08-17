<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqPackageCategoryTranslation represents a request to translate package category data from a specific language.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqPackageCategoryTranslation extends ApiRequest
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
	 * @var int $categoryID (optional)
	 */
	public $categoryID;

}