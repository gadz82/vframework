<?php

use Overplace\Overplace;
use Slim\Slim;

require 'firephp/fb.php';

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
		'/',
		function() use ($app){
			new Overplace($app->getInstance());
		}
	);

$app->run();