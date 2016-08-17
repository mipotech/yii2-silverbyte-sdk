<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqGuestDiscount represents a request to get guest discount per room for club member.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqGuestDiscount extends ApiRequest
{
	
	protected $dateFields = [
		'arriveDate'
	];
	
	/**
	 * @var int $hotelID
	 */
	public $hotelID;
	
	/**
	 * @var int $chainID (optional)
	 */
	public $chainID;
	
	/**
	 * @var decimal $guestID
	 */
	public $guestID;
	
	/**
	 * @var string $clubCode
	 */
	public $clubCode;
	
	/**
	 * @var timestamp $arriveDate
	 */
	public $arriveDate;
	
	/**
	 * @var int $nights
	 */
	public $nights;
	
	/**
	 * @var Int16 $roomCount
	 */
	public $roomCount;
	
}
