<?php

namespace DIP_Training;

class Plugin {

	public function init() {

		$factory = new Provider_Factory();
		$factory2 = new Factory2();
		$social = $factory->get_object('facebook');
		$social2 = $factory->get_object('google');

		echo 'User name : '. $social->get_name().'<br/>';
		echo 'User name : '. $social2->get_name();
	}

}
