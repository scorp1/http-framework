<?php
declare(strict_types = 1);

require_once __DIR__ . ('/../vendor/autoload.php');

echo 'Hello world';
$example = new \App\Example();
phpinfo();
var_dump($example->do());