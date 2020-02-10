<?php


namespace Src;


use PHPUnit\Util\Exception;

class Fibonacci
{

    public function getValueByIndex($index)
    {
        $first = 0;
        $second = 1;

        for ($i = 0, $total = ($index - 1); $i < $total; $i++) {
            $third = $first + $second;
            $first = $second;
            $second = $third;
        }

        return $first;
    }

}