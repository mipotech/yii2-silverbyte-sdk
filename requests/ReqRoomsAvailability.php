<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;
use mipotech\silverbyte\models;

/**
 * ReqRoomsAvailability represents a request to get hotels rooms availability.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqRoomsAvailability extends ApiRequest
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
	 * @var bool $IsToDisableErrorOnMultiHotelSearch
	 */
	public $IsToDisableErrorOnMultiHotelSearch;
	
}
