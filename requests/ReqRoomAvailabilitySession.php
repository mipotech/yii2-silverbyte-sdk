<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqRoomAvailabilitySession represents a request to get room availability with session ID.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqRoomAvailabilitySession extends ApiRequest
{
	/**
	 * @var string $sessionID 
	 */
	public $sessionID;

}