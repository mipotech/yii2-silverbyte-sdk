<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqCancel represents a request to cancel a reservation.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqCancel extends ApiRequest
{
	/**
	 * @var decimal $masterID 
	 */
	public $masterID;

	/**
	 * @var int $reservationID (optional)
	 */
	public $reservationID;
	
	/**
	 * @var int $hotelID 
	 */
	public $hotelID;
	
}
