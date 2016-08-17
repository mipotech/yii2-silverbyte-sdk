<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqPlan represents a request to get plans.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqPlan extends ApiRequest
{

	/**
	 * @var int $hotelID (optional)
	 */
	public $hotelID;
	
	/**
	 * @var string $planCode 
	 */
	public $planCode;
	
}
