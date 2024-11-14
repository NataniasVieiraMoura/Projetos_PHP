<?php 
    #readline(string) :  serve para ler dados
    #strval() ou doubleval() serve para definir o tipo da variável que vai receber
    $comensal = strval(readline("Qual sua posição sobre a Guerra da Ucrânia? "));
    $peixonalta = doubleval(readline("Quanto você ganha como programador? "));
    #echo ou print exibe valores na tela
    echo "Sua posição é especifíca Sr., sua ideia sobre : " . $comensal . ", não é muito boa.";
    echo "Você acha que pode ganha mais que $peixonalta";
?>