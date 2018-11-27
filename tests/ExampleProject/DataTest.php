<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/6/18
 * Time: 4:18 PM
 */
declare(strict_types=1);

namespace ExampleProject\Tests;


use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{

    /**
     * @dataProvider additionProvider_One
     * @dataProvider additionProvider_Two
     * @param int $a
     * @param int $b
     * @param int $expected
     */
    public function testAdd(int $a, int $b, int $expected) {
        $this->assertEquals($expected, ($a + $b));
    }

    public function additionProvider_One() {
        return [
            "case 1" => [0, 0, 0],
            "case 2" => [0, 1, 1],
            "case 3" => [1, 1, 2],
            "case 4" => [1, 2, 3],
            "case 5" => [3, 3, 6],
        ];
    }

    public function additionProvider_Two() {
        return [
            [-1, 1, 0],
            [-0, 1, 1],
            [-1, -1, -2],
            [-1, 2, 1],
            [-3, 5, 2],
        ];
    }
}