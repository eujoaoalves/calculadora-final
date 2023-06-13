<?php
$firstNumber = readline('First number: ');
$secondNumber = readline('Second number: ');
$operation = readline('Operation: ');
$resultado = 0;

switch ($operation) {
    case '-':
        $resultado = $firstNumber - $secondNumber;
        break;

    case '/':
        $resultado = $firstNumber / $secondNumber;
        break;

    case '+':
        $resultado = $firstNumber + $secondNumber;
        break;

    case '*':
        $resultado = $firstNumber * $secondNumber;
        break;
        
    default:
        $resultado = 'Digite um operador valido';
        break;
}

echo $resultado;
