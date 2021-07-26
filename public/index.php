<?php

require '../vendor/autoload.php';

use app\database\models\User;

$user = new User;

$user->firstName = 'Alexandre';
$user->lastName = 'Goncalves';
$user->id = 1;

var_dump($user);
