# BrMoney

A reais money format for brazilians

It's just a Composer class demo to show how to put packages on Packagist

How to install
```
composer require treinaweb/brmoney
```

How to use
```php
require __DIR__ . '/vendor/autoload.php';

use BrMoney\Formatters\Money;

$money = new Money;

echo $money->toReais(2544); // Prints R$ 2.544,00
```