<?php

require_once('vendor/autoload.php');

use FibonacciGenerator\Generator;

$generator = new Generator();
echo $generator->generate(10);