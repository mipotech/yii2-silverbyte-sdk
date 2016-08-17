<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqRoomTranslations represents a request to translate room data from a specific langage.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqRoomTranslations extends ApiRequest
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
	 * @var string $roomCategory
	 */
	public $roomCategory;
}