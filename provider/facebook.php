<?php

namespace DIP_Training\Provider;


use DIP_Training\Provider;

class Facebook implements Provider {

	public function get_name() {
		return 'whatever';
	}

	public function get_user_id() {
		return 5;
	}
}