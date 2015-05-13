# Camel

[![Build status...](https://img.shields.io/travis/MattKetmo/camel.svg?style=flat)](http://travis-ci.org/MattKetmo/camel)
[![Code quality...](https://img.shields.io/scrutinizer/g/MattKetmo/camel.svg?style=flat)](https://scrutinizer-ci.com/g/MattKetmo/camel/)
[![License MIT](http://img.shields.io/badge/license-MIT-blue.svg?style=flat)](https://github.com/MattKetmo/camel/blob/master/LICENSE)
[![Packagist](http://img.shields.io/packagist/v/mattketmo/camel.svg?style=flat)](https://packagist.org/packages/mattketmo/camel)

Tiny library to handle words case transformation.

The main idea is to split the given word into several words and assemble them
in another format.

Example: `camelCase => [camel, Case] => camel_case`

## Installation

Via Composer:

```shell
curl -s https://getcomposer.org/installer | php
php composer.phar install --no-dev
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

## Unit Tests

Install `phpunit` via Composer:

```shell
curl -s https://getcomposer.org/installer | php
php composer.phar install
```

Once installed, run the following command:

```shell
vendor/bin/phpunit
```

## License

Camel is released under the MIT License.
See the [bundled LICENSE file](LICENSE) for details.
