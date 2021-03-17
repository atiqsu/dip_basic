<?php

namespace DIP_Training;

use DIP_Training\Provider\Facebook;
use DIP_Training\Provider\Google;

class Factory2 {

	private $container;

	public function __construct() {

		$this->container = new Container();

		$this->container->register('facebook', Facebook::class);
		$this->container->register('google', Google::class);
	}


	public function get_object($type) {

		$container = $this->container;

		return $container->get_instance($type);
	}
}
