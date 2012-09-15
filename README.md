# Camel

Tiny library to handle words case transformation.

The main idea is to split the given word into several words and assemble them
in another format.

Example: `camelCase => [camel, Case] => camel_case`

## Installation

Via Composer:

```
curl -s https://getcomposer.org/installer | php
php composer.phar install
```

## Usage

```php
<?php

require __DIR__.'/vendor/autoload.php';

use Camel\CaseTransformer;
use Camel\Format;

$transformer1 = new CaseTransformer(new Format\SnakeCase, new Format\CamelCase);
$transformer2 = new CaseTransformer(new Format\CamelCase, new Format\ScreamingSnakeCase);

echo $transformer1->transform('hello_world'); // helloWorld
echo $transformer2->transform('helloWorld');  // HELLO_WORLD
```

## Supported formats

- `camelCase`
- `StudlyCaps`
- `snake_case`
- `SCREAMING_SNAKE_CASE`
