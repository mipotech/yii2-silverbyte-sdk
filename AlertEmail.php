<?php

namespace mipotech\silverbyte;

use Yii;
use yii\helpers\Json;
use app\modules\dashboard\components\HelperFunc;

class AlertEmail
{
	/**
	 * @param string $subject
	 * @param string $body
	 * @param array $extraParams
	 *
	 * @return boolean
	 */
	public static function sendAlertEmail($subject = '', $body = '', $extraParams = [])
	{
		if (isset($extraParams['recipients'])) {
			$to = $extraParams['recipients'];
		}
<<<<<<< HEAD
		elseif ($recipients = \app\modules\dashboard\components\HelperFunc::getSiteSetting('sb_email_recipient_list')) {
=======
		elseif ($recipients = HelperFunc::getSiteSetting('sb_email_recipient_list')) {
>>>>>>> faa5ee8770b17c60b0fe407f7d86f378a0710aee
			$to = $recipients;
		}
		elseif (isset(Yii::$app->params['silverbyte']['alertEmailRecipients'])) {
			$to = Yii::$app->params['silverbyte']['alertEmailRecipients'];
		}
		else {
			return false;
		}

		$ret = Yii::$app->mailer->compose()
<<<<<<< HEAD
			->setFrom(['no-reply@fattal-hotels.com'=>'Fattal Hotels Website'])
=======
			->setFrom('no-reply@fattal-hotels.com')
>>>>>>> faa5ee8770b17c60b0fe407f7d86f378a0710aee
			->setTo($to)
			->setSubject($subject)
			->setHtmlBody($body)
			->send();

		return $ret;
	}
}
