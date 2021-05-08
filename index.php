<?php

require_once __DIR__ . '/vendor/autoload.php';

use KCS\Antis;

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->warning('Foo');

$vardas = 'Antis_' . random_int(0, 100);

$antis = new Antis(1, $vardas);
echo $antis->gautiAmziu();
$antis->koksVardas();

$antis->plauktiLaika(12);

$antis->keistiVardas('Jonas');
$antis->koksVardas();
echo $antis->gautiAmziu();
