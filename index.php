<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 0;

echo $bike->foward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();