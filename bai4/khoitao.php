<?php

class Animal{

    function __construct($name, $hairColor, $address)
    {
        $this->name = $name;
        $this->hairColor = $hairColor;
        $this->address = $address;
    }
}

$dog = new Animal("rex", "black", "Việt Nam");
$duck = new Animal("donal trump", "yellow", "Mẽo");

echo "<pre>";
var_dump($dog, $duck);


?>