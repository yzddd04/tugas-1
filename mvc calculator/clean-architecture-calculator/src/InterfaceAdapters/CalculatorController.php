<?php
namespace CleanArchitectureCalculator\InterfaceAdapters;

use CleanArchitectureCalculator\UseCases\CalculatorUseCase;

class CalculatorController
{
    private $calculatorUseCase;

    public function __construct(CalculatorUseCase $calculatorUseCase)
    {
        $this->calculatorUseCase = $calculatorUseCase;
    }

    public function handleRequest($num1, $num2, $operation)
    {
        try {
            return $this->calculatorUseCase->calculate($num1, $num2, $operation);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}