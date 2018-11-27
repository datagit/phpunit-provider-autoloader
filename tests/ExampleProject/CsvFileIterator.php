<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/6/18
 * Time: 4:33 PM
 */

namespace ExampleProject\Tests;

class CsvFileIterator
{
    protected $data = [];

    public function __construct($file) {
        $this->data = $this->_convertDataToArray($file);
    }

    public function getData() {
        return empty($this->data) ? [] : $this->data;
    }

    public function __destruct() {
        unset($this->data);
    }

    private function _convertDataToArray($file) {
        $file = file_get_contents($file,"r");
        foreach ( explode("\n", $file, -1) as $line )
        {
            $data[] = explode(',', $line);
        }
        return $data;
    }

}