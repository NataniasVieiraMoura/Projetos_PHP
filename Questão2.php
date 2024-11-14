<?php 
    /*2. Desenvolva um script que realize operações matemáticas básicas (adição,
subtração, multiplicação, divisão e módulo) com duas variáveis numéricas.
Adicione operadores de incremento e decremento também.
*/
    $num = 30;
    $outro = 40;
    $soma = $num + $outro;
    $subtração = $num - $outro;
    $divisão = $num / $outro;
    $resto = $num %  $outro;
    
    echo "\n Para os valores " . $num . " e " . $outro . ".\n A soma fica " . $soma . "\n A subtração fica " . $subtração . "\n A divisão fica " . $divisão . "\n O resto da divisão de outro por num fica " . $resto;        
    #Para os valores 30 e 40.
    #A soma fica 70
    #A subtração fica -10
    #A divisão fica 0.75
    #O resto da divisão de outro por num fica 30
    echo "Variavis num e outro antes do pré incremento: " . $num . ", " .
    $outro;
#Variavis num e outro antes do pré incremento: 30, 40
    ++$num;
    ++$outro;
    echo "Variavis num e outro depois do pré incremento: " . $num . ", " .
    $outro;
#Variavis num e outro depois do pré incremento: 31, 41
    echo "Variavis num e outro antes do prós-incremento: " . $num . ", " .
 $outro;
#Variavis num e outro antes do prós-incremento: 31, 41
    $num++;
    $outr++;

    $outro++;
    echo "Variavis num e outro depois do prós-incremento: " . $num . ", " . $outro;
#Variavis num e outro depois do prós-incremento: 32, 42
    ?>