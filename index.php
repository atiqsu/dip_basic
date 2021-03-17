<?php

require_once __DIR__.'/provider.php';
require_once __DIR__.'/provider-factory.php';
require_once __DIR__.'/provider/facebook.php';
require_once __DIR__.'/provider/google.php';
require_once __DIR__.'/provider/not-listed.php';
require_once __DIR__.'/container.php';
require_once __DIR__.'/plugin.php';


(new \DIP_Training\Plugin())->init();
