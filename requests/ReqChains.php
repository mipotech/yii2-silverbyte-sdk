<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

use mipotech\silverbyte\enums\PaymentBy;

/**
 * ReqBookedReservation represents a request to get a reservation.
 *
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqChains extends ApiRequest
{
	/**
	 * @var int $id (optiona)
	 */
	public $id;

	/**
	 * @var string $name (optional)
	 */
	public $name;
}
