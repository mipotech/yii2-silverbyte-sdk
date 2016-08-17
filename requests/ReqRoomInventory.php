<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqRoom represents a request to get rooms.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqRoomInventory extends ApiRequest
{
	protected $dateFields = [
		'fromDate', 'toDate'
	];
	
	/**
	 * @var int? $roomCategory
	 */
	public $hotelID;

	/**
	 * @var string $roomCategory (optional)
	 */
	public $roomCategory;
	
	/**
	 * @var timestamp  $fromDate (optional)
	 */
	public $fromDate ;
	
	/**
	 * @var timestamp  $toDate (optional)
	 */
	public $toDate;
	
}
