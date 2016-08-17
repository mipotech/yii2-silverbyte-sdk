<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqCurrency represents a request to receive data for all available currencies
 * or one specific currency.
 *
 * @author Chaim Leichman, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqCurrency extends ApiRequest
{
	/**
	 * @var string $currencyCode
	 */
	public $currencyCode;

	/**
	 * @var string $currencyName 
	 */
	public $currencyName;
}
