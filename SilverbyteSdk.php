<?php

namespace mipotech\silverbyte;

use Yii;

use yii\helpers\Json;
use app\modules\dashboard\components\HelperFunc;

use mipotech\silverbyte\requests\ReqChains;
use mipotech\silverbyte\requests\ReqDayAvailability;
use mipotech\silverbyte\requests\ReqHotel;
use mipotech\silverbyte\requests\ReqHotelEmailAddresses;
use mipotech\silverbyte\requests\ReqRoomsAvailability;
use mipotech\silverbyte\requests\ReqRoomAvailabilitySession;
use mipotech\silverbyte\requests\ReqPackageToShow;
use mipotech\silverbyte\requests\ReqPackageToBookPerPax;
use mipotech\silverbyte\requests\ReqPackageSession;
use mipotech\silverbyte\requests\ReqMinimumPrice;
use mipotech\silverbyte\requests\ReqProductFinalPrice;
use mipotech\silverbyte\requests\ReqAvailabilityPrices;
use mipotech\silverbyte\requests\ReqGuest;
use mipotech\silverbyte\requests\ReqUpdateGuest;
use mipotech\silverbyte\requests\ReqUpdateSession;
use mipotech\silverbyte\requests\ReqReservation;
use mipotech\silverbyte\requests\ReqCancel;
use mipotech\silverbyte\requests\ReqBookedReservation;
use mipotech\silverbyte\requests\ReqLanguage;
use mipotech\silverbyte\requests\ReqPriceCodeTranslations;
use mipotech\silverbyte\requests\ReqPlanTranslations;
use mipotech\silverbyte\requests\ReqRoomTranslations;
use mipotech\silverbyte\requests\ReqHotelTranslations;
use mipotech\silverbyte\requests\ReqCityTranslations;
use mipotech\silverbyte\requests\ReqChainTranslations;
use mipotech\silverbyte\requests\ReqNationalityTranslations;
use mipotech\silverbyte\requests\ReqPolicyTranslations;
use mipotech\silverbyte\requests\ReqSpecialServiceTranslations;
use mipotech\silverbyte\requests\ReqPackageCategoryTranslation;
use mipotech\silverbyte\requests\ReqCreditCompanyTranslations;
use mipotech\silverbyte\requests\ReqRoom;
use mipotech\silverbyte\requests\ReqRoomPax;
use mipotech\silverbyte\requests\ReqState;
use mipotech\silverbyte\requests\ReqCurrency;
use mipotech\silverbyte\requests\ReqCreditCompany;
use mipotech\silverbyte\requests\ReqPlan;
use mipotech\silverbyte\requests\ReqGuestDiscount;
use mipotech\silverbyte\requests\ReqCustomerHotel;
use mipotech\silverbyte\requests\ReqRoomInventory;
use mipotech\silverbyte\requests\ReqSpecialService;

class SilverbyteSdk extends \yii\base\Component
{
	/*public function getChains($params = [])
	{
		$request = new ReqChains;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'chains');
		print_r();
		return $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}*/

	public function getDayAvailability($params = [])
	{
		$request = new ReqDayAvailability;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/day');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	/**
	 * Retrieve all of the relevant chains
	 */
	public function getChains($params = [])
	{
		$request = new ReqChains;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'chains');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	public function getHotels($params = [])
	{
		$request = new ReqHotel;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'hotels');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	//******* doesn't return anything******//
	public function getHotelEmailAddresses($params = [])
	{
		$request = new ReqHotelEmailAddresses;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'hotels/emails');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getRoomsAvailability($params = [])
	{
		$request = new ReqRoomsAvailability;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/rooms');

		return $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	//******* doesn't return anything******//
	public function getRoomAvailabilitySession($params = [])
	{
		$request = new ReqRoomAvailabilitySession;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/room/session');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getPackageToShow($params = [])
	{
		$request = new ReqPackageToShow;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/package/show');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	public function getPackageToBookPerPax($params = [])
	{
		$request = new ReqPackageToBookPerPax;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/packages');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	//******* doesn't return anything******//
	public function getPackageSession($params = [])
	{
		$request = new ReqPackageSession;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/package/session');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getMinimumPrice($params = [])
	{
		$request = new ReqMinimumPrice;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/min-price');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getProductFinalPrice($params = [])
	{
		$request = new ReqProductFinalPrice;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/room/final-price');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getAvailabilityPrices($params = [])
	{
		$request = new ReqAvailabilityPrices;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/prices');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	public function getSpecialServices($params = [])
	{
		$request = new ReqSpecialService;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'specialservice');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	//******* doesn't return anything******//
	public function getGuest($params = [])
	{
		$request = new ReqGuest;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'guest');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getUpdateGuest($params = [])
	{
		$request = new ReqUpdateGuest;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'guest/update');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	public function getUpdateReservation($params = [])
	{
		$request = new ReqUpdateSession;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'availability/room/session/update');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	public function getNewReservation($params = [])
	{
		$request = new ReqReservation;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'reservation/insert');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	//******* doesn't return anything******//
	public function getCancel($params = [])
	{
		$request = new ReqCancel;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'reservation/cancel');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getBookedReservations($params = [])
	{
		$request = new ReqBookedReservation;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'reservation/booking');
        
		return (isset($ret['error']) && $ret['error'] != '' && $ret['error'] != null) ? [ ] : $ret['data'];
	}

	public function getLanguages($params = [])
	{
		$request = new ReqLanguage;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'languages');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getPriceCodeTranslations($params = [])
	{
		$request = new ReqPriceCodeTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/pricecode');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? print_r($params['languageID']) : $ret['data'];
	}

	public function getPlanTranslations($params = [])
	{
		$request = new ReqPriceCodeTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/plan');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getRoomTranslations($params = [])
	{
		$request = new ReqRoomTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/room');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getHotelTranslations($params = [])
	{
		$request = new ReqHotelTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/hotel');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getCityTranslations($params = ["Jerusalem", "Tel-Aviv"])
	{
		$request = new ReqCityTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/city');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getChainTranslations($params = [])
	{
		$request = new ReqChainTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/chain');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getNationalityTranslations($params = [])
	{
		$request = new ReqNationalityTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/nationality');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getPolicyTranslations($params = [])
	{
		$request = new ReqPolicyTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/policy');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getSpecialServiceTranslations($params = [])
	{
		$request = new ReqSpecialServiceTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/specialservice');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getPackageCategoryTranslations($params = [])
	{
		$request = new ReqPackageCategoryTranslation;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/package/categories');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getCreditCompanyTranslations($params = [])
	{
		$request = new ReqCreditCompanyTranslations;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'translations/credit');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getRooms($params = [])
	{
		$request = new ReqRoom;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'rooms');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getRoomPax($params = [])
	{
		$request = new ReqRoomPax;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'rooms/pax');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	/**
	 * Retrieve available states
	 *
	 * @param array $params
	 * 		- code (optional) - defaults to all
	 *		- countryCode (optional) - defaults to all
	 * @return array
	 */
	public function getStates($params = [])
	{
		$request = new ReqState;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'states');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	/**
	 * Retrieve available currencies
	 *
	 * @param array $params
	 * 		- currencyCode (optional) - defaults to all
	 *		- currencyName (optional) - defaults to all
	 * @return array
	 */
	public function getCurrencies($params = [])
	{
		$request = new ReqCurrency;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'currencies');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getCreditCards($params = [])
	{
		$request = new ReqCreditCompany;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'credit');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getPlans($params = [])
	{
		$request = new ReqPlan;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'plans');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}


	/**
	 * @param mipotech\silverbyte\requests\ApiRequest $request The request object
	 * @param array $params The array of parameters to load into this request
	 * @return null
	 */

	  public function getGuestDiscount($params = [])
	{
		$request = new ReqGuestDiscount;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'guest/discount');
		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	public function getCustomerHotel($params = [])
	{
		$request = new ReqCustomerHotel;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'customer/hotel');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [] : $ret['data'];
	}

	public function getRoomInventory($params = [])
	{
		$request = new ReqRoomInventory;
		$this->loadParams($request, $params);

		$ret = $this->doRequest($request, 'rooms/inventory');

		return isset($ret['error']) && $ret['error'] != '' && $ret['error'] ? [ ] : $ret['data'];
	}

	protected function loadParams(&$request, $params)
	{
		if(is_array($params))
		{
			foreach($params as $key => $value)
			{
				if(property_exists($request, $key))
					$request->__set($key, $value);
			}
		}
	}

	/**
	 * Perform the actual API request
	 *
	 * @todo logging
	 * @todo dynamic credentials drawn from config file
	 *
	 * @param mipotech\silverbyte\requests\ApiRequest $requestModel
	 * @param string $uri
	 * @param array $params
	 * @return array
	 */
	protected function doRequest($requestModel, $uri, $params = [])
	{
		$endpoint = Yii::$app->params['silverbyte']['baseUrl'].$uri;
		$requestModel->userName = Yii::$app->params['silverbyte']['userName'];
		$requestModel->password = Yii::$app->params['silverbyte']['password'];
        $customerId = null;
        if (isset(Yii::$app->params['silverbyte']['customerID-'. substr(Yii::$app->language, 0, 2)])) {
            $customerId = Yii::$app->params['silverbyte']['customerID-'. substr(Yii::$app->language, 0, 2)];
        } elseif (isset(Yii::$app->params['silverbyte']['customerID'])) {
            $customerId = Yii::$app->params['silverbyte']['customerID'];
        }

		if(!(Yii::$app->params['silverbyte']['baseUrl'] && $requestModel->userName && $requestModel->password && $customerId != null)) {
			throw new \yii\base\InvalidConfigException("Missing credentials. Please verify that all Silverbyte credentials are defined in config/params.php");
		}
        $requestModel->customerID = $customerId;

		$dataArr = $requestModel->toArray();
		$jsonData = Json::encode($dataArr);

		$ch = curl_init($endpoint);
		curl_setopt_array($ch, [
			CURLOPT_POST => 1,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_POSTFIELDS => $jsonData,
			CURLOPT_HTTPHEADER => [
				'Accept: application/json',
				'Content-Type: application/json; charset=UTF-8',
				//'Content-Length:'.strlen($data_string))
			]
		]);
		$response_raw = curl_exec($ch);
		curl_close($ch);

		$response = $response_raw ? json_decode($response_raw, true) : [];

		// Prepare log data and log the API request according to priority
		$logData = ['endpoint'=>$endpoint, 'data'=>$jsonData, 'responseRaw'=>$response_raw];
		if(YII_DEBUG) {
			$logData['responseParsed'] = $response;
		}
		if(isset($response['error'])) {
			Yii::error($logData, __CLASS__);
		}
		else {
			Yii::info($logData, __CLASS__);
		}
        
		// Call our internal error handler if we detect an error
		if(isset($response['error']) && !YII_DEBUG) {
			$this->errorHandler($uri, $response);
		}

		return $response;
	}

	/**
	 * Handle API errors that require special behavior
	 *
	 * @param string $uri The URI of the request
	 * @param miptotech\silverybyte\requests\ApiRequest $request
	 * @param array $response
	 */
	protected function errorHandler($uri, $request, $response)
	{
		$errorCode = intval($response['message']['textNumber']);

		// Default email body is a pretty print of the complete request, response, and backtrace
		$body = "<p>Endpoint: {$uri}</p>";
		$body .= "<p>Request:</p><p>".print_r($request, true)."</p>";
		$body .= "<p>Response:</p><p><pre>".print_r($response, true)."</pre></p>";
		$body .= "<p>Trace:</p><p><pre>".print_r(debug_backtrace(false), true)."</pre></p>";

		// Heart beat failure
		if ($errorCode == 1930) {
			AlertEmail::sendAlertEmail('[Optima] Fattal Hotels Heart Beat Error', $body);
		}
		else {
			switch($uri) {
				// customer identification failure
				case 'guest':
						AlertEmail::sendAlertEmail('[Optima] Fattal Hotels Guest Identification Error', $body);
					break;
				case 'reservation/booking':
				case 'reservation/cancel':
				case 'reservation/insert':
						AlertEmail::sendAlertEmail('[Optima] Fattal Hotels Booking Error', $body);
					break;
				case 'hotels':
						AlertEmail::sendAlertEmail('[Optima] Fattal Hotels Search Engine Error', $body);
					break;
			}
		}
	}
}
