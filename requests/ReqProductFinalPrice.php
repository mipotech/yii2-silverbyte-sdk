<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqProductFinalPrice represents a request to get room availability final price for price codes, packages.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqProductFinalPrice extends ApiRequest
{
	
	protected $dateFields = [
		'fromDate'
	];
	
	/**
	 * @var List<int> $hotelsList
	 */
	public $hotelsList;
	
	/**
	 * @var timestamp $fromDate 
	 */
	public $fromDate;
	
	/**
	 * @var int $nights
	 */
	public $nights;
	
	/**
	 * @var bool $isLocal
	 */
	public $isLocal;
	
	/**
	 * @var int $adults 
	 */
	public $adults;
	
	/**
	 * @var int $children
	 */
	public $children;
	
}
