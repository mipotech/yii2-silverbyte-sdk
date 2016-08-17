<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

use mipotech\silverbyte\enums\PaymentBy;
use mipotech\silverbyte\enums\MergeGuestFields;

/**
 * ReqCancel represents a request to insert a new reservation.
 *
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqReservation extends ApiRequest
{

	protected $dateFields = [
		'fromDate', 'toDate', 'creditCardExpired'
	];

	/**
	 * @var int $hotelID
	 */
	public $hotelID;

	/**
	 * @var string $voucherNumber
	 */
	public $voucherNumber;

	/**
	 * @var timestamp $fromDate
	 */
	public $fromDate;

	/**
	 * @var timestamp $toDate
	 */
	public $toDate;

	/**
	 * @var string $guestRemarks
	 */
	public $guestRemarks;

	/**
	 * @var PaymentBy $paymentBy
	 */
	public $paymentBy = PaymentBy::GUEST;

	/**
	 * @var string $cardCode
	 */
	public $cardCode;

	/**
	 * @var string $paymentCardType
	 */
	public $paymentCardType;

	/**
	 * @var string $creditCardNumber
	 */
	public $creditCardNumber;

	/**
	 * @var timestamp $creditCardExpired
	 */
	public $creditCardExpired;

	/**
	 * @var string $cvv
	 */
	public $cvv;

	/**
	 * @var string $creditCardHolderName
	 */
	public $creditCardHolderName;

	/**
	 * @var string $CurrencyCode
	 */
	public $CurrencyCode;

	/**
	 * @var string $token
	 */
	public $token;

	/**
	 * @var string $companyName
	 */
	public $companyName;

	/**
	 * @var string $contactName
	 */
	public $contactName;

	/**
	 * @var string $contactEmail
	 */
	public $contactEmail;

	/**
	 * @var string $contactPhone
	 */
	public $contactPhone;

	/**
	 * @var string $contactAddress
	 */
	public $contactAddress;

	/**
	 * @var MergeGuestFiedls $mergGuestFields
	 */
	public $mergGuestFields = MergeGuestFields::EMAILADDRESS;

	/**
	 * @var PrePayment $prePayment (we didn't execute this function)
	 */
	public $prePayment;

	/**
	 * @var string $clerkKey
	 */
	public $clerkKey;



	//********************************For Agent Only*************************//
	//********************************Not relevant for us********************//

	/**
	 * @var string $travelAgencyName
	 */
	//public $travelAgencyName;

	/**
	 * @var string $TravelAgentName
	 */
	//public $TravelAgentName;

	/**
	 * @var string $TravelAgentPhone
	 */
	//public $TravelAgentPhone;

	/**
	 * @var List<ReservationRoom> $roomsList
	 */
	public $roomsList;

	/**
	 * @var GuestInvoiceDetails $invoiceDetails
	 * We didn't execute the class
	 */
	public $invoiceDetails;

	//***************************************************************************//
}
