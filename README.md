# WhitePages

A PHP library for working w/ the [WhitePages API](https://pro.whitepages.com/developer/documentation/find-person-api/).

## Install

Normal install via Composer.

## Usage

```php
use Travis\WhitePages;

$apikey = 'abcdefg';

$response = WhitePages::run($apikey, 'person', [
	'name' => 'Ceasar Augustus',
	'address.city' => 'Washington',
	'address.state_code' => 'DC',
]);
```

See the [documentation](https://pro.whitepages.com/developer/documentation/find-person-api/) for more information about available methods and parameters.