<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqRoom represents a request to get rooms.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqRoom extends ApiRequest
{
	/**
	 * @var string $roomCategory
	 */
	public $roomCategory;

	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
	
}
