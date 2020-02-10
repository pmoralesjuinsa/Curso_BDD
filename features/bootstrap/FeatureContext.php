<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Src\Fibonacci;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $fibonacci;
    private $indexNumber;

    public function __construct()
    {
    }

    /**
     * @Given a Fibonacci Sequence Algorithm
     */
    public function aFibonacciSequenceAlgorithm()
    {
        $this->fibonacci = new Fibonacci();
    }

    /**
     * @When I pass the index :arg1
     */
    public function iPassTheIndexValue($indexNumber)
    {
        $this->indexNumber = $indexNumber;
    }

    /**
     * @Then I should be able to get the value :arg1
     */
    public function iShouldBeAbleToGetTheValue($value)
    {
        $calculatedValue = $this->fibonacci->getValueByIndex($this->indexNumber);

        if($calculatedValue != $value) {
            throw new Exception(sprintf("Result for index %s should be %s and got %s", $this->indexNumber, $value, $calculatedValue));
        }
    }
}
