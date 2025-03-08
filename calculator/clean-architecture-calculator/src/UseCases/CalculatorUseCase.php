<?php
namespace CleanArchitectureCalculator\UseCases;

use CleanArchitectureCalculator\Entities\Calculator;

class CalculatorUseCase
{
    private $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function calculate($num1, $num2, $operation)
    {
        switch ($operation) {
            case 'add':
                return $this->calculator->add($num1, $num2);
            case 'subtract':
                return $this->calculator->subtract($num1, $num2);
            case 'multiply':
                return $this->calculator->multiply($num1, $num2);
            case 'divide':
                return $this->calculator->divide($num1, $num2);
            default:
                throw new \InvalidArgumentException("Invalid operation.");
        }
    }
}