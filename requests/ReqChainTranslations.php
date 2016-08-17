<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

/**
 * ReqChainTranslations represents a request to translate chain data from a specific language.
 *
 * @author Rebecca Attali, MIPO Technologies Ltd
 * @version 1.0
 */

class ReqChainTranslations extends ApiRequest
{
	/**
	 * @var int $languageID (optional)
	 */
	public $languageID;

	/**
	 * @var int $chainID (optional)
	 */
	public $chainID;

}