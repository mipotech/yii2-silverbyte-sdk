<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqSpecialService represents a request to get the special services
 * offered by a specific hotel.
 *
 * @author Chaim Leichman, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqSpecialService extends ApiRequest
{
	/**
	 * @var string $specialServiceCode
	 */
	public $specialServiceCode;

	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
}
