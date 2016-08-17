<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqCustomerHotel represents a request to get hotel customer.
 * 
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqCustomerHotel extends ApiRequest
{
	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
	
	/**
	 * @var string $customerKey 
	 */
	public $customerKey;
	
}
