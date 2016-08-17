<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqRoomPax represents a request to get room pax.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqRoomPax extends ApiRequest
{
	/**
	 * @var decimal $serial (optional)
	 */
	public $serial;

	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
	
	/**
	 * @var string $roomCategory
	 */
	public $roomCategory;
	
}
