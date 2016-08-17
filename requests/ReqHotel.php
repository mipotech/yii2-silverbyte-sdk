<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqHotel represents a request to get list of hotels.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqHotel extends ApiRequest
{
	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;

	/**
	 * @var int $regionID (optional)
	 */
	public $regionID;
	
	/**
	 * @var int $grade (optional)
	 */
	public $grade;
	
	/**
	 * @var int $chainID (optional)
	 */
	public $chainID;
	
	/**
	 * @var string $cityCode 
	 */
	public $cityCode;
	
	/**
	 * @var string $countryCode 
	 */
	public $countryCode;

}