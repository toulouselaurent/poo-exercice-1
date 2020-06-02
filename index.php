<?php

require "Bicycle.php";
require "Car.php";


$bike = new Bicycle();
var_dump($bike);

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->setColor("yellow");
var_dump($rockrider);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor("black");
var_dump($tornado);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();



$car = new Car("black","3","Gasoil");
var_dump($car);

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();