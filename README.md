PHPUnit Provider Autoloader
===========================

> Magic helper to autoload JSON files for data providers in PHPUnit.

[![Build Status](https://img.shields.io/travis/redaxmedia/phpunit-provider-autoloader.svg)](https://travis-ci.org/redaxmedia/phpunit-provider-autoloader)
[![Packagist Version](https://img.shields.io/packagist/v/redaxmedia/phpunit-provider-autoloader.svg)](https://packagist.org/packages/redaxmedia/phpunit-provider-autoloader)
[![License](https://img.shields.io/packagist/l/redaxmedia/phpunit-provider-autoloader.svg)](https://packagist.org/packages/redaxmedia/phpunit-provider-autoloader)


Installation
------------

```
composer install redaxmedia/phpunit-provider-autoloader
```


Usage
-----

Create the `TestCaseAbstract` for your testing suite:

```php
<?php
namespace ExampleProject\Tests;

use PHPUnitProviderAutoloader;

/**
 * TestCaseAbstract
 *
 * @since 1.0.0
 *
 * @package ExampleProject
 * @category Tests
 */

abstract class TestCaseAbstract extends PHPUnitProviderAutoloader\TestCaseAbstract
{
	/**
	 * directory of the provider
	 *
	 * @var string
	 */

	protected $_providerDirectory = 'tests' . DIRECTORY_SEPARATOR . 'provider';
    	
	/**
	 * namespace of the testing suite
	 *
	 * @var string
	 */

	protected $_testNamespace = __NAMESPACE__;
}
```

Extend your `ExampleTest` from `TestCaseAbstract` to autoload the `tests/provider/ExampleTest_testDataProvider.json` file:

```php
<?php
namespace ExampleProject\Tests;

/**
 * ExampleTest
 *
 * @since 1.0.0
 *
 * @package ExampleProject
 * @category Tests
 */

class ExampleTest extends TestCaseAbstract
{
	/**
	 * testDataProvider
	 *
	 * @since 1.0.0
	 *
	 * @param string $expect
	 *
	 * @dataProvider providerAutoloader
	 */

	public function testDataProvider(string $expect = null)
	{
		$this->assertEquals($expect, 'test');
	}
}
```