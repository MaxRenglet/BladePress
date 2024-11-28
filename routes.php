<?php

use Rmax\Bladepress\Bladepress;
use Rmax\Bladepress\Routes;

Routes::page('*', function () {
	echo Bladepress::compile('hello', ['name' => 'tesdg']);
});
