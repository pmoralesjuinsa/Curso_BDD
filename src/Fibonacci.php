<?php


namespace Src;


use PHPUnit\Util\Exception;

class Fibonacci
{

    public function getValueByIndex($index)
    {
        if($index == 1)
        {
            return 0;
        }

        if($index == 2) {
            return 1;
        }
    }

}