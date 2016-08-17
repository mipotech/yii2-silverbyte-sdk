<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqMinimumPrice represents a request to get room availability minimum price.
 *
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqMinimumPrice extends ApiRequest
{
	protected $dateFields = [
		'fromDate'
	];

	/**
	 * @var List<int> $hotelsList
	 */
	public $hotelsList = [];

	/**
	 * @var timestamp $fromDate
	 */
	public $fromDate;

	/**
	 * @var int $nights
	 */
	public $nights = 1;

	/**
	 * @var bool $isLocal
	 */
	public $isLocal = false;

	/**
	 * @var int $adults
	 */
	public $adults = 2;

	/**
	 * @var int $children
	 */
	public $children = 0;
}
