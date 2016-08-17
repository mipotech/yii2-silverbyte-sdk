<?php

/**
 * @license GNU GPL v3.0
 * @version 1.0
 */

namespace mipotech\silverbyte\requests;

use Yii;

/**
 * ApiRequest represents the base request upon which all other requests are to be build
 *
 * @author Chaim Leichman, MIPO Technologies Ltd
 * @version 1.0
 */
abstract class ApiRequest extends \yii\base\Model
{
	/**
	 * @var string $userName Sales Channel User Name
	 */
	public $userName;

	/**
	 * @var string $password Sales Channel Password
	 */
	public $password;

	/**
	 * @var int $customerID (optional)
	 */
	public $customerID;

	/**
	 * @var array $dateFields - the fields that specify a datetime value
	 */
	protected $dateFields = [];

	/**
	 * @param string $name
	 * @param mixed $value
	 */
	function __set($name , $value)
	{
		if(is_array($this->dateFields) && in_array($name, $this->dateFields))
			$this->$name = $this->saveDate($value);
		else
			$this->$name = $value;
	}

	/**
	 * Convert date string from date picker format (d/m/y) to timestamp
	 *
	 * @param string $str
	 * @return integer timestamp
	 */
	protected function saveDate($str)
	{
		return Yii::$app->formatter->asDate($str, 'php:c');
	}
}
