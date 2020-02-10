Feature: Test Fibonacci Sequence (Sucesió)
  In order to use Fibonacci Sequence on Maths projects
  I need to get the right number for a given index

  Scenario: Get Fibonacci Sequence Number for index 1
    Given a Fibonacci Sequence Algorithm
    When I pass the index 1
    Then I should be able to get the value 0

  Scenario: Get Fibonacci Sequence Number for index 2
    Given a Fibonacci Sequence Algorithm
    When I pass the index 2
    Then I should be able to get the value 1