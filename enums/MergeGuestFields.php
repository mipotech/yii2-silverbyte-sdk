<?php

namespace mipotech\silverbyte\enums;

use abhimanyu\enum\helpers\BaseEnum;

class MergeGuestFields extends BaseEnum
{
	const NONE = 0;
	const LASTNAME = 1;
	const FIRSTNAME = 2;
	const EMAILADDRESS = 4; 
	const WEBPASSWORD = 8;
	const PASSPORT = 16;
	//const ALL = self::LASTNAME | self::FIRSTNAME | self::EMAILADDRESS | self::WEBPASSWORD | self::PASSPORT;
	const ALL = '1 | 2 | 4 | 8 | 16';
	//const DEFAULTMERGE = self::LASTNAME | self::FIRSTNAME | self::EMAILADDRESS;
	const DEFAULTMERGE = '1 | 2 | 4';
	const DISABLE = 'disable';
}
