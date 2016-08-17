<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\models;

/**
 * ReqRoomAvailability represents a request to get the list of rooms availabilities to search for.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqRoomAvailability extends ApiRequest
{
	
	protected $dateFields = [
		'fromDate'
	];
	
	/**
	 * @var timestamp $fromDate
	 */
	public $fromDate;
	
	/**
	 * @var int $nights
	 */
	public $nights;
	
	/**
	 * @var bool $isLocal
	 */
	public $isLocal;
	
	/**
	 * @var string $roomCategory
	 */
	public $roomCategory;
	
	/**
	 * @var string $planCode
	 */
	public $planCode;
	
	/**
	 * @var string $priceCode
	 */
	public $priceCode;
	
	/**
	 * @var int $adults
	 */
	public $adults;
	
	/**
	 * @var int $children
	 */
	public $children;
	
	/**
	 * @var int $infants
	 */
	public $infants;
	
	/**
	 * @var int $languageID
	 */
	public $languageID;
	
	/**
	 * @var decimal $guestID (optional)
	 */
	public $guestID;
	
	/**
	 * @var string $clubCode
	 */
	public $clubCode;
	
	/**
	 * @var bool $showErrors
	 */
	public $showErrors;
	
	/**
	 * @var bool $disableCacheSearch
	 */
	public $disableCacheSearch;
	
	/**
	 * @var uint $minRoomAvailabiltyToUseCache
	 */
	public $minRoomAvailabiltyToUseCache;
	
	/**
	 * @var int $requestDescriptor
	 */
	public $requestDescriptor;
	
	/**
	 * @var int $decimals (optional)
	 */
	public $decimals;
	
}
