PHPUnit Provider Autoloader
===========================

> Magic helper to autoload JSON files for data providers in PHPUnit.

[![Build Status](https://img.shields.io/travis/redaxmedia/phpunit-provider-autoloader.svg)](https://travis-ci.org/redaxmedia/phpunit-provider-autoloader)
[![Packagist Version](https://img.shields.io/packagist/v/redaxmedia/phpunit-provider-autoloader.svg)](https://packagist.org/packages/redaxmedia/phpunit-provider-autoloader)
[![License](https://img.shields.io/packagist/l/redaxmedia/phpunit-provider-autoloader.svg)](https://packagist.org/packages/redaxmedia/phpunit-provider-autoloader)


Installation
------------

```
composer require redaxmedia/phpunit-provider-autoloader
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

Extend `ExampleTest` from `TestCaseAbstract` to autoload the `tests\provider\ExampleTest{_testMethod}.json` file:

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
	 * testMethod
	 *
	 * @since 1.0.0
	 *
	 * @param string $expect
	 *
	 * @dataProvider providerAutoloader
	 */

	public function testMethod(string $expect = null)
	{
		$this->assertEquals($expect, 'test');
	}
}
```

Test in CMD
```bash
$ ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/ExampleProject/ExampleTest.php
$ ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/ExampleProject/ExampleTest.php --testdox
$ ./vendor/bin/phpunit tests/ExampleProject/ExampleTest.php

```
