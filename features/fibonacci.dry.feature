Feature: Test Fibonacci Sequence (Sucesió)
  In order to use Fibonacci Sequence on Maths projects
  I need to get the right number for a given index

  Background:
    Given a Fibonacci Sequence Algorithm

  Scenario: Get Fibonacci Sequence Number for index 1
    When I pass the index 1
    Then I should be able to get the value 0

  Scenario: Get Fibonacci Sequence Number for index 2
    When I pass the index 2
    Then I should be able to get the value 1

  Scenario: Get Fibonacci Sequence Number for index 3
    When I pass the index 3
    Then I should be able to get the value 1

  Scenario: Get Fibonacci Sequence Number for index 4
    When I pass the index 4
    Then I should be able to get the value 2