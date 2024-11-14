<?php 
    #Tipos de dados:
    print "<h2>Tipos de dados</h2><br>"; 
    $boo = true;
    echo "{$boo}<br>";
    $$boo = false;
    echo "{$$boo}<br>";
    $flutuante = 23.234;
    echo "{$flutuante}<br>";
    $inteiro = 235453;
    echo "{$inteiro}<br>";
    $expoente = 12e10;
    echo "{$expoente}<br>";
    $base8 = 01601;
    echo "{$base8}<br>";
    $base2 = 0011010110101;
    echo "{$base2}<br>";

    #Formas de exibição em PHP
    print "<h2>Formas de exibição em php</h2><br>"; 
    //Normal:
    $controle ="texto de teste";
    echo 'Exibindo um texto echo<br>';
    print 'Exibindo um texto print<br><br>';
    
    //Para array:
    $lista = array("moto", 23e2 ,"trem", 023,"caminhão", true, 2.542, 'D');
    echo "Exibindo um array em var_dump() ";
    //Detalha o array
    var_dump($lista);
    echo "<br>";
    //Mostra a ordem dos elementos no array
    echo "Exibindo um array em print_r() ";
    print_r($lista);
    echo "<br><br>";

    #Soma de string e inteiro e float:
    print "<h2>Operações com entre tipos de variáveis</h2><br>";
    $int = 20;
    $pi = 3.1415;
    $texto = "100 um numero em um texto";
    /*veja que ele retorna o erro : 
    Warning: A non-numeric value encountered in ...*/
    echo "Resultado: " . $int + $pi + $texto;

    $variaveis = array($lista, $int, $pi, $texto, $boo, $$boo, $flutuante, $inteiro, $base8, $base2,);
    #Para pegar o tipo da variável:
    //gettype($variavel);
    #Laço que itera sobre um valor:
    print "<h2>Para Iterar sobre um array:</h2><br>"; 
    foreach($variaveis as $var){
        echo "{$var} >> " . gettype($var) . "<br>";
    }

    echo "<br>";
    define("GRAVITAÇÃO", 6.674e10^-11, false);
    //defina false para evitar indiferenciação de case_insensitive
    echo "Constante gravitacional: " . GRAVITAÇÃO;

    #Laços de repetição:
    print "<h2>Laço de repetição for: </h2><br>"; 
    
    //for(valor; condição; ação){bloco de código em loop;}
    for($a = 1; $a <= 10; $a++){
        for($y = 1; $y <= $a; $y++){
            echo $y;
        }
        echo "<br>";
    }
echo "<br>";
    for($k = 9; $k >= 1 ;$k--){
        $tt = "";
        for($sub = 10 - $k; $sub > 0; $sub--){
            $tt .= "_";
        }
        for($r = 1; $r <= $k; $r++){
            $tt .= "$r";
        }
        echo $tt . "<br>";
    }
echo "<br>";
    for($g = 1; $g < 10; $g++){
        $txt = "";
        for($h = 10 - $g; $h > 0; $h--){
            $txt .= "_";
        }
        for($u = $g; $u > 0; $u--){
            $txt .= "{$u}";
        }
        echo "{$txt}<br>";
    }
echo "<br>";
    print "<h2>Laço while:</h2><br>"; 
    
    //while:
    $condição = 10;
    while($condição < 20){
        $condição++;
        echo "{$condição}<br>";
    }
echo "<br>";
    //do{}while();
    print "<h2>Laço do while:</h2><br>"; 
    do{
        $condição--;
        echo "{$condição}<br>";
    }while($condição > 6);
    //foreach($array as $apelido){bloco de código}:
echo "<br>";
    foreach($variaveis as $key => $value){
        echo "Chave: {$key} => Valor: {$value}<br>";
    }
echo "<br>";
    foreach($variaveis as $valor){
        echo "Valor: {$valor}<br>";
    }
echo "<br>";
    #Condicionais: 
    print "<h2>Condicionais: </h2>";   
    //Laço de repetição switch(){case:<bloco de código>break;...default:<bloco de código>break;}
    print "<h2>Condicional switch:</h2><br>"; 
    switch(gettype(true)){
        case("Array"):
        echo "Esse valor é um array.";
        break;
        case("int"):
            echo "É um número do conjunto dos inteiros N";
        break;
        case("float"):
            echo "É um número do conjuto dos reais R";
        break;
        case("boolean"):
            echo "Essa variável é do tipo boolean Lógico";
        break;
    }
    print "<h2>Condicional if else if else</h2><br>";
    //Condicionais if, else if, else:
        if(false){
            echo "O texto abaixo é falso<br>";
            if(false == false){
                echo "Esse bloco de código é executado em seguida";
            }
        } 
        else if("trabalho" === "Manufatura"){
            echo "Esse bloco de código não será executado";
        }
        else{
            echo "Esse bloco de código será executado";
        }
    #Palavras reservadas break e continue:
    print "<h2>Palavras reservadas break e continue:</h2><br>";
    $ex = 0;
    $contagem = 0;
    while($ex < 1000000){
        $ex++;
        if($ex % 2 and $ex %  3 == 1){
            $contagem++;
        }
        else if($ex == 1000000){
                echo "<br>Sim, são {$contagem} números primos no interválo";
                break;
            }
    }    
echo "<br>";
    #Operadores Ternários:
    print "<h2>Operadores ternários</h2>";
    $caso_um = (23 % 5 === 1) ? "O calculo não é exato" : "O cálculo é exato";
    echo "{$caso_um}<br>";
   
    $caso_dois = (236 % 12 == 0) ? 10000 : array("livro","cama","mesa","banho");
    print_r("{$caso_dois[3]}<br>");
    
    $formula = (1000 >= 4000) ? true : -0.1;
    print "{$formula}";
echo "<br>";
?>