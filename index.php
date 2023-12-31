<?php

declare(strict_types=1);

use App\CatShelter;
use App\DogShelter;
use App\Food;
use App\AnimalFood;

require_once __DIR__ . '/autoload.php';

//Covariance
echo "Covariance example:";
echo '<br>';
$kitty = (new CatShelter())->adopt("Ricky");
$kitty->speak();
echo '<br>';

$doggy = (new DogShelter())->adopt("Mavrick");
$doggy->speak();
echo '<br>';

//Contravariance
echo "Contravariance example:";
echo '<br>';
$kitty = (new CatShelter())->adopt("Ricky");
$catFood = new AnimalFood();
$kitty->eat($catFood);
echo '<br>';

$doggy = (new DogShelter())->adopt("Mavrick");
$banana = new Food();
$doggy->eat($banana);
