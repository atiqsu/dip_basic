<?php

namespace DIP_Training;

class Container {

	private $services = [];

	public function __construct() {

		$this->services = [];
	}

	public function register($name, $class) {

		$md5 = md5($name);

		if(!isset($this->services[$md5])) {

			$this->services[$md5] = new $class();
		}

		return $this;
	}

	public function get_instance($name) {

		$md5 = md5($name);

		//todo - handle exception

		return $this->services[$md5];
	}
}