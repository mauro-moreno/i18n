# PHP i18n

## Installation

The easiest way to install is using [composer](http://getcomposer.org).
Just open a terminal and type:

```bash
$ composer require mauro-moreno/i18n
```

## Usage

```php
// Array of classes implementing translator interface.
$translators = [];
$i18n = new I18n\I18n($translators);

$i18n->getTranslation('Hello');
// Hola
```
