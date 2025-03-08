<?php
require 'vendor/autoload.php';


use CleanArchitectureCalculator\Entities\Calculator;
use CleanArchitectureCalculator\UseCases\CalculatorUseCase;
use CleanArchitectureCalculator\InterfaceAdapters\CalculatorController;

// Inisialisasi
$calculator = new Calculator();
$calculatorUseCase = new CalculatorUseCase($calculator);
$calculatorController = new CalculatorController($calculatorUseCase);

// Handle form submission
$result = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = $calculatorController->handleRequest($num1, $num2, $operation);
}

// Load view
include 'view.php';