<?php

require_once('src/FibonacciGenerator/Generator.php');

use FibonacciGenerator\Generator;

$generator = new Generator();
echo $generator->generate(10);