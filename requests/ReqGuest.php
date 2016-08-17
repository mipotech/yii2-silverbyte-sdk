<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqGuest represents a request to search for guest with the requested information.
 *
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqGuest extends ApiRequest
{
	/**
	 * @var decimal $guestID (optional)
	 */
	public $guestID;

	/**
	 * @var int $chainID (optional)
	 */
	public $chainID = 3;		// 3 = Fattal

	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;

	/**
	 * @var string $firstName
	 */
	public $firstName;

	/**
	 * @var string $lastName
	 */
	public $lastName;

	/**
	 * @var string $emailAddress
	 */
	public $emailAddress;

	/**
	 * @var string $webPassword
	 */
	public $webPassword;

	/**
	 * @var string $passport
	 */
	public $passport;

	/**
	 * @var bool $errorOnMultipleGuestsProfile
	 */
	public $errorOnMultipleGuestsProfile;

}
