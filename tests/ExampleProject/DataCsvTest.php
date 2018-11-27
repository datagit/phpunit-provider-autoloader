<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/6/18
 * Time: 4:35 PM
 */

namespace ExampleProject\Tests;

use PHPUnit\Framework\TestCase;

require 'CsvFileIterator.php';

class DataCsvTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        $data = (new CsvFileIterator('tests/provider/ExampleProject/Tests/data.csv'))->getData();
        return $data;
    }
}