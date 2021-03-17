<?php

namespace DIP_Training;

use DIP_Training\Provider\Facebook;
use DIP_Training\Provider\Google;

class Provider_Factory {

	public function get_object($type) {

		switch($type) {

			case 'facebook':

				return new Facebook();

			case 'google':
				return new Google();

			default:
				return Not_Listed();
				//return through exception
		}
	}
}
