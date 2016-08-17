<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqDayAvailability represents a request to get hotel availability for each day.
 * 
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqDayAvailability extends ApiRequest
{
	protected $dateFields = [
		'fromDate', 'toDate', 'arrivalDate'
	];
	
	/**
	 * @var int $hotelID 
	 */
	public $hotelID;
	
	/**
	 * @var timestamp $fromDate 
	 */
	public $fromDate;
	
	/**
	 * @var timestamp $toDate
	 */
	public $toDate;
	
	/**
	 * @var string $roomCategory
	 */
	public $roomCategory;
	
	/**
	 * @var bool $isLocal (always false)
	 */
	public $isLocal = false;
	
	/**
	 * @var bool $returnRoomCat 
	 */
	public $returnRoomCat;
	
	/**
	 * @var timestamp $arrivalDate (optional)
	 */
	public $arrivalDate;
	/**
	 * @var bool $verbose 
	 */
	public $verbose;
	
	/**
	 * @var bool $isPackage 
	 */
	public $isPackage;
	
	
}
