<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

use mipotech\silverbyte\enums\PaymentBy;
use mipotech\silverbyte\enums\ReservationSpecifyInfo;

/**
 * ReqBookedReservation represents a request to get a reservation.
 *
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqBookedReservation extends ApiRequest
{
	
	protected $dateFields = [
		'fromDate', 'toDate'
	];
	
	/**
	 * @var decimal $masterID (optional)
	 */
	public $masterID;
	
	/**
	 * @var int $reservationID (optional)
	 */
	public $reservationID;
	
	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
	
	/**
	 * @var decimal $guestID (optional)
	 */
	public $guestID;
	
	/**
	 * @var string $clerkKey
	 */
	public $clerkKey;
	
	/**
	 * @var ReservationSpecifyInfo $specifyInfo
	 */
	public $specifyInfo = ReservationSpecifyInfo::DETAILS_ON_EVERY_DATE;
	
	/**
	 * @var timestamp $fromDate
	 */
	public $fromDate;
	
	/**
	 * @var timestamp $toDate
	 */
	public $toDate;
	
	/**
	 * @var bool $isEnableChainSearch
	 */
	 public $isEnableChainSaerch = true;
	
}
