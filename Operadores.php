<?php 
    #Operadores Aritméticos:
    $porta = true;
    echo "Porta fica : "  . $porta . "\n";
    #o menos na variável inverte o valor booleano
    echo "Porta negada : " . -$porta;
    #$ala = true;
    #echo "Porta negada novamente : " . ~$ala;
    echo "\n" . 156/23;
    echo "\n" . 32*34;
    echo "\n" . 1158-485;
    echo "\n" . 958+919;
    echo "\n" . 61%4;

    $cont = 0;
    $cont++;
    echo "pré-incremento" . $cont;
    ++$cont;
    echo "\npós-incremento" . $cont;
    --$cont;
    echo "\npré-incremento" . $cont;
    $cont--;
    echo "\npós-incremento" . $cont;

    $comuta = "formula";
    echo $comuta;
    $dados = $comuta;
    echo $dados;
    $controle = 23;
    $controle += 100;
    echo $controle;
    $retrato -= 100;
    echo $controle;
    $retrato *= 2;
    echo $retrato;
    $retrato /= 2;
    echo $retrato;
    $retrato %= 2;
    echo $retrato;
    $comuta .= " contrato de modelo";
    echo $comuta;
    $modo = false;
    $confirmação = true;
    echo $modo | $confirmação;
    echo $modo && $confirmação;
    echo $modo != $confirmação;
    echo $modo == $confirmação;
    

?>