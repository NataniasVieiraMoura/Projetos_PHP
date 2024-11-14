<?php 
    /**Crie um array associativo que armazene marcas de carros e seus respectivos
modelos. Exiba o valor de algumas chaves, adicione novos elementos e
exiba o array atualizado. */
    $marcas  = array("Ford","GeneralMotors" => "GM", "BMW", "Lanburgini", "Renaut", "VolksWagen","Jaguar", "Puma", "Marcopolo");
    echo $marcas[0];
    echo $marcas[2];
    echo $marcas[3];
    echo $marcas[1];
    echo $marcas["GeneralMotors"];
    #Adicionando valores ao array
    $marcas[8] = "LandHouver";
    echo $marcas[8];
    $marcas[9] = "Bugati";
    $marcas[10] = "Fiat";
    echo $marcas[1];
    echo $marcas[0];
    echo "$marcas[2] \n $marcas[3] \n $marcas[4] \n $marcas[5] \n $marcas[6] \n $marcas[7] \n $marcas[8] \n $marcas[9] \n $marcas[10]";
    ?>