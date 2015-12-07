# WhitePages

A PHP library for working w/ the [WhitePages API](https://pro.lookup.whitepages.com/api/).

## Install

Normal install via Composer.

## Usage

```php
use Travis\WhitePages;

$response = WhitePages::run([
	'apikey' => 'abcdefg',
]);
```

The ``apikey`` value must be included in your payload for each API request.