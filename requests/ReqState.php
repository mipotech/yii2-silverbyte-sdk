<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqState represents a request to receive data for all available states
 * or one specific state.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqState extends ApiRequest
{
	/**
	 * @var string $code 
	 */
	public $code;

	/**
	 * @var string $countryCode 
	 */
	public $countryCode;
}
