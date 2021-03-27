<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$bike->setColor = 'blue';
$bike->setCurrentSpeed = 0;

echo $bike->start() . '<br>';
echo $bike->foward();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>' . $bike->start();

$rockrider = new Bicycle();
$rockrider->setColor('yellow');


$tornado = new Bicycle();
$tornado->setColor('black');

$tornado->foward();
