<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqUpdateSession represents a request to update session details.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqUpdateSession extends ApiRequest
{
	/**
	 * @var string $sessionId
	 */
	public $sessionId;
	
	/**
	 * @var decimal $totalPrice
	 */
	public $totalPrice;
	
	/** if true dont validate guestID, reasonCode, clubCode
	 * @var bool $isIgnoreClubValidations
	 */
	public $isIgnoreClubValidations;
	
	/**
	 * @var decimal $guestID
	 */
	public $guestID ;
	
	/**
	 * @var string $reasonCode
	 */
	public $reasonCode;
	
	/**
	 * @var string $clubCode
	 */
	public $clubCode;
	
	/**
	 * @var decimal $discountPercent
	 */
	public $discountPercent;
	
	/**
	 * @var string $vipCode
	 */
	public $vipCode ;
	
	/**
	 * @var List[decimal] $dayFinalPriceList
	 */
	public $dayFinalPriceList;
	
}
