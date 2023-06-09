<?php

use App\AbstractFactory\Runner as AbstractFactoryRunner;
use App\FactoryMethod\Runner as AbstractMethodRunner;
use App\Builder\Runner as BuilderRunner;
use App\Prototype\Runner as PrototypeRunner;
use App\Singleton\Runner as SingletonRunner;
use App\Adapter\Runner  as AdapterRunner;
use App\Bridge\Runner  as BridgeRunner;

require __DIR__ . "/vendor/autoload.php";

// Factory Method
$factory_method_runner = new AbstractMethodRunner('sea'); // Check [road, sea, something]
// $factory_method_runner->run();

// Abstract Factory
$abstract_factory = new AbstractFactoryRunner();
$chair = $abstract_factory->getFactory('victorian')->createChair(); // Vectorian Chair
$chair = $abstract_factory->getFactory('modern')->createChair(); // Modern Chair
// echo $chair->hasLegs() . "\n";
// echo $chair->sitOn() . "\n";

// Builder
$builder = new BuilderRunner();
// $builder->build('wood');
// $builder->build('stone');

// prototype
$prototype = new PrototypeRunner();
// $prototype->run();

// Singleton
$singleton = new SingletonRunner();
// $singleton->run();

// Adapter
$adapter = new AdapterRunner();
// $adapter->run();

$bridge = new BridgeRunner();
$bridge->run();