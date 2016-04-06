<?php
require __DIR__ . '/../bootstrap.php';

$api = new \Visavi\Api();

$start = new DateTimeImmutable();
$date0 = $start->modify('+1 day');

echo '<h2>Выбор маршрута в одну сторону</h2>';
$params = [
	'dir' => 0,
	'tfl' => 3,
	'checkSeats' => 1,
	'code0' => '2004000',
	'code1' => '2060600',
	'dt0' => $date0->format('d.m.Y'),
];
var_dump($api->trainRoutes($params));