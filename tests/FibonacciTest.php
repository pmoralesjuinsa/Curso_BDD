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
    public function if_index_is_one_return_value_zero()
    {
        $value = $this->fibonacci->getValueByIndex(1);

        $this->assertEquals(0, $value, sprintf("Result for index 1 should be 0 and got %s", $value));
    }

    /** @test */
    public function if_index_is_two_return_value_one()
    {
        $value = $this->fibonacci->getValueByIndex(2);

        $this->assertEquals(1, $value, sprintf("Result for index 1 should be 0 and got %s", $value));
    }

    /** @test */
    public function if_index_is_three_return_value_one()
    {
        $value = $this->fibonacci->getValueByIndex(3);

        $this->assertEquals(1, $value, sprintf("Result for index 1 should be 0 and got %s", $value));
    }

    /** @test */
    public function check_first_six_numbers_with_array_of_values_and_returns()
    {
        $pairs = array("1" => 0, "2" => 1, "3" => 1, "4" => 2, "5" => 3, "6" => 5);

        foreach ($pairs as $index => $value) {
            $calculatedValue = $this->fibonacci->getNextItemNumber((int)$index);
            $this->assertEquals($value, $calculatedValue, sprintf("For index %s, calculated value % does not match passed %s", $index, $value, $calculatedValue));
        }

    }

}