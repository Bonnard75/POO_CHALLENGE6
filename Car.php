<?php

require_once 'LightableInterface.php';
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface

{

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}

?>

