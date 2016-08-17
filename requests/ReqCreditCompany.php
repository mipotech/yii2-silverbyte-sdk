<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqCreditCompany represents a request to get hotel credit cards.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqCreditCompany extends ApiRequest
{
	/**
	 * @var string $cardCode
	 */
	public $cardCode;

	/**
	 * @var string $currencyCode
	 */
	public $currencyCode;
	
	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
	
}
