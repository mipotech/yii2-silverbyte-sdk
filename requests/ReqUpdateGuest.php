<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqUpdateGuest represents a request to update guest details.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqUpdateGuest extends ApiRequest
{
	/**
	 * @var int $hotelID
	 */
	public $hotelID;
	
	/**
	 * @var Guest $guest
	 */
	public $guest;
	
}
