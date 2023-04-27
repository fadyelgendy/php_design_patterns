<?php

use App\AbstractFactory\Runner as AbstractFactoryRunner;
use App\FactoryMethod\Runner;

require __DIR__ . "/vendor/autoload.php";

// Factory Method
$factory_method_runner = new Runner('sea'); // Check [road, sea, something]
// $factory_method_runner->run();

// Abstract Factory
$abstract_factory = new AbstractFactoryRunner();
$chair = $abstract_factory->getFactory('victorian')->createChair(); // Vectorian Chair
$chair = $abstract_factory->getFactory('modern')->createChair(); // Modern Chair
echo $chair->hasLegs() . "\n";
echo $chair->sitOn() . "\n";