<?php

require_once 'bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'LightableInterface.php';
require_once 'Speedometer.php';


echo Speedometer::convertKmToMiles(10);
echo "<br>";
echo Speedometer::convertMilesToKm(10);

?>

