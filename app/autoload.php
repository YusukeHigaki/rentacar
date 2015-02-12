<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Gedmo', __DIR__ . '/../vendor/gedmo-doctrine-extensions/lib');
$loader->add('Stof', __DIR__ . '/../vendor/bundles');
$loader->add('Doctrine\\Bundle',  __DIR__ . '/../vendor/bundles');
$loader->add('Doctrine\\Common\\DataFixtures',  __DIR__ . '/../vendor/doctrine-fixtures/lib');
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
