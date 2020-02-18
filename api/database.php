<?php

use Illuminate\Database\Capsule\Manager as Manager;

$manager = new Manager();

//server
//$manager->addConnection([
//	'driver' => 'mysql',
//	'host'  => 'localhost',
//	'username'  => 'makeitar_psalmis',
//	'password'  => 'S~(d4maVg5&b',
//	'database'  => 'makeitar_psalmist',
//	'charset'   => 'utf8',
//	'collation' => 'utf8_unicode_ci',
//	'prefix'    => ''
//]);

//local
$manager->addConnection([
	'driver' => 'mysql',
	'host'  => '127.0.0.1',
	'username'  => 'root',
	'password'  => 'root',
	'database'  => 'taller',
	'charset'   => 'utf8',
	'port' => '8889',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => ''
]);


$manager->bootEloquent();