Feature: Test Fibonacci Sequence with Outline
  In order to use Fibonacci Sequence on Maths projects
  I need to get the right number for a given index

  Scenario Outline: Get Fibonacci Sequence Number for index 1
    Given a Fibonacci Sequence Algorithm
    When I pass the index <index>
    Then I should be able to get the value <result>

    Examples:
    | index | result  |
    | 1     | 0       |
    | 2     | 1       |
    | 3     | 1       |
    | 4     | 2       |
    | 5     | 3       |
    | 6     | 5       |