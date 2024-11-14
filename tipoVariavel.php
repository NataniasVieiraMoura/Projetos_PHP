<?php 
    $contador = 1816;
    $formação = "Graduação em Ciências Comtábeis";
    $numero1 = 165.98;
    $porta = true;
    $aleta = false;
    define("Const_gravitacional",8.9875517873681764);
    #Array multidimensional
    $lista = array(
        "Curitiba" => array(1 => "Aroeira",2 => "Capixaba",3 => "Motozinho"),
        "Mocotó" => array(1 => "Caruarú",2 => "Adelina",3 => "José dos Montes"),
        "Rodizio Grande" => array(1 => "Yuri Menor",2 => "Bota Furada",3 => "Helio Gavião")
    );
    #A função gettype() retorna uma string descrevendo o tipo da variável 
    echo "contador : " . gettype($contador) . "\n";
    echo "formação : " . gettype($formação) . "\n";
    echo "numero1 : " . gettype($numero1) . "\n";
    echo "porta : " . gettype($porta) . "\n";
    echo "aleta : " . gettype($aleta) . "\n";
    echo "lista : " . gettype($lista) . "\n";
    echo "Const_gravitacional : " . gettype(Const_gravitacional) . "\n";
    echo "tipo do gettype() : " . gettype(gettype($contador)) . "\n";
?>