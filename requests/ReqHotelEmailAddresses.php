<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqHotelEmailAddresses represents a request to get hotel email addresses.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqHotelEmailAddresses extends ApiRequest
{
	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;

}