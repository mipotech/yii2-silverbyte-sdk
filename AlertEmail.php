<?php

namespace mipotech\silverbyte;

use Yii;
use yii\helpers\Json;

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
		elseif ($recipients = getSiteSetting('sb_email_recipient_list')) {
			$to = $recipients;
		}
		elseif (isset(Yii::$app->params['silverbyte']['alertEmailRecipients'])) {
			$to = Yii::$app->params['silverbyte']['alertEmailRecipients'];
		}
		else {
			return false;
		}

		$ret = Yii::$app->mailer->compose()
			//->setFrom('')
			->setTo($to)
			->setSubject($subject)
			->setHtmlBody($body)
			->send();

		return $ret;
	}
}