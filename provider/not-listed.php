<?php

namespace DIP_Training\Provider;


use DIP_Training\Provider;

class Not_Listed implements Provider {

	public function get_name() {
		return '';
	}

	public function get_user_id() {
		return 0;
	}
}
