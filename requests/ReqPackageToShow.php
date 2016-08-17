<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqPackageToShow represents a request to get packages without restrictions check.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqPackageToShow extends ApiRequest
{
	/**
	 * @var List<int> $hotelIDList
	 */
	public $hotelIDList = [];
	
	/**
	 * @var int $languageID (optional)
	 */
	public $languageID;
	
	/**
	 * @var bool $isLocal
	 */
	public $isLocal;
	
	/**
	 * @var int $decimals (optional)
	 */
	public $decimals;
	
}
