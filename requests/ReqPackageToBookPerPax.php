<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;
use mipotech\silverbyte\models;
/**
 * ReqPackageToBookPerPax represents a request to get packages To book with different pax.
 * 
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqPackageToBookPerPax extends ApiRequest
{
	/**
	 * @var List<ReqHotel> $reqHotelsList
	 */
	public $reqHotelsList = [];
	
	/**
	 * @var List<ReqPackageToBook> $packagesPaxesList 
	 */
	public $packagesPaxesList = [];
	
	/**
	 * @var bool $IsToDisableErrorOnMultiHotelSearch
	 */
	public $IsToDisableErrorOnMultiHotelSearch;
	
}
