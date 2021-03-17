<?php

namespace DIP_Training;

class Plugin {

	public function init() {

		$factory = new Provider_Factory();
		$social = $factory->get_object('facebook');

		echo 'User name : '. $social->get_name();
	}

}
