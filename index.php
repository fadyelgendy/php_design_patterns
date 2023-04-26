<?php

use App\FactoryMethod\Runner;

require __DIR__ . "/vendor/autoload.php";

// Factory Method
$factory_method_runner = new Runner('sea'); // Check [road, sea, something]
$factory_method_runner->run();
