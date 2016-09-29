<?php

namespace App\Classes;

use Request;

class PSTools {
	public static function urltostring($lowercase = false) {
		$strToReturn = "";


		// Cannot use switch due to only returning TRUE or FALSE
		if (Request::is('/')) {
			$strToReturn = "";
		} else if (Request::is('products')) {
			$strToReturn = "Produkter";
		} else if (Request::is('how-it-works')) {
			$strToReturn = "Så funkar det";
		} else if (Request::is('contact')) {
			$strToReturn = "Kontakt";
		} else if (Request::is('customers')) {
			$strToReturn = "Kunder";
		} else if (Request::is('order')) {
			$strToReturn = "Beställ";
		} else if (Request::is('company')) {
			$strToReturn = "Företaget";
		} else if (Request::is('team')) {
			$strToReturn = "Team";
		} else if (Request::is('our-story')) {
			$strToReturn = "Vår Story";
		} else if (Request::is('media')) {
			$strToReturn = "Press";
		} else if (Request::is('resellers')) {
			$strToReturn = "Återförsäljare";
		}

		if ($lowercase) {
			$strToReturn = strtolower($strToReturn);
		}

		return $strToReturn;
	}
}