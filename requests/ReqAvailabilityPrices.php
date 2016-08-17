<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqAvailabilityPrices represents a request to get room availability (price-codes) and packages in one request.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqAvailabilityPrices extends ApiRequest
{
	
	/**
	 * @var List<ReqHotel> $reqHotelsList
	 */
	public $reqHotelsList = [];
	
	/**
	 * @var List<ReqRoomAvailability> $roomsList
	 */
	public $roomsList = [];
	
	/**
	 * @var List<ReqPackageToBook> $packagesPaxesList
	 */
	public $packagesPaxesList = [];
	
}
