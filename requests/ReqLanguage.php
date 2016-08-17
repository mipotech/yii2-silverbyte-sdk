<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqLanguage represents a request to get languages.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqLanguage extends ApiRequest
{
	/**
	 * @var int $id (optional)
	 */
	public $id;

	/**
	 * @var string $name 
	 */
	public $name;
	
	/**
	 * @var string $code
	 */
	public $code;
	
}
