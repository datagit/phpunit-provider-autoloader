<?php
/**
 * Created by PhpStorm.
 * User: daomanhdat
 * Date: 11/27/18
 * Time: 11:11 AM
 */

namespace ExampleProject\Tests;

use PHPUnitProviderAutoloader\TestCaseAbstract;
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
     * @param array $row
     *
     * @dataProvider providerAutoloader
     *
     * path data json:
     *      priority=1      tests/provider/ExampleProject/Tests/ExampleTest_testMethod.json
     *      priority=2      tests/provider/ExampleProject/Tests/ExampleTest.json
     */

    public function testMethod(array $row)
    {
        $this->assertEquals($row['expect'], $row['actual']);
    }
}