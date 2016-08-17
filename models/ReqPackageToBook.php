<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\models;

/**
 * ReqPackageToBook represents a request for packages that past restrictions check.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqPackageToBook extends ApiRequest
{
	
	protected $dateFields = [
		'fromDate', 'toDate'
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
	 * @var bool $isLocal
	 */
	public $isLocal;
	
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
	 * @var long $packageID {optional}
	 */
	public $packageID;
	
	/**
	 * @var long $parentID (optional)
	 */
	public $parentID;
	
	/**
	 * @var decimal $guestID {optional}
	 */
	public $guestID;
	
	/**
	 * @var string $clubCode
	 */
	public $clubCode;
	
	/**
	 * @var string $reasonCode (optional)
	 */
	public $reasonCode;
	
	/**
	 * @var int $requestDescriptor
	 */
	public $requestDescriptor;
	
	/**
	 * @var int $decimals (optional)
	 */
	public $decimals;
	
	/**
	 * @var string $priceCode
	 */
	public $priceCode;
	
	/**
	 * @var string $roomCategory
	 */
	public $roomCategory;
	
	/**
	 * @var string $planCode
	 */
	public $planCode;
	
}
