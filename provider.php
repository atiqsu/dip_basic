<?php

namespace DIP_Training;

interface Provider {

	public function get_name();

	public function get_user_id();

	public function set_config() ;
	public function auth() ;
	public function get_token() ;
}


// facebook + github
