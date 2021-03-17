<?php

namespace DIP_Training\Provider;


use DIP_Training\Provider;

class Google implements Provider {

	public function get_name() {
		return 'wow_and_wow';
	}

	public function get_user_id() {
		return 7;
	}
}
