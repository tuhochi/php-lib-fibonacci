# random-password

Generate random password of a given length

## Precondition

This project using composer v2.

```
$ composer -V
```

should return at minimum 2.0

## Installation

This project using composer.

```
$ composer require tuhochi/php-lib-fibonacci
```

## Usage

Genrate random password.

```php
<?php

require_once('vendor/autoload.php');

use FibonacciGenerator\Generator;

$generator = new Generator();
echo $generator->generate(10);
```