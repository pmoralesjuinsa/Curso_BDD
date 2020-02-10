<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Src\Fibonacci;

class FibonacciTest extends TestCase
{
    protected $fibonacci;

    function setUp(): void
    {
        $this->fibonacci = new Fibonacci();
    }

    /** @test */
    public function meme()
    {
        $nextItemnumber = $this->fibonacci->getValueByIndex(1);

        $this->assertEquals(0, $nextItemnumber, sprintf("Result for index 1 should be 0 and got %s", $nextItemnumber));
    }

}