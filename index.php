<?php 
    echo "<h1>Tipos de dados</h1>";
    $porta = true;
    $fecho = false;
    $contador = 16.15;
    $modulo = -48;
    $produto = 2e10;
    $botão = null;
    Class Motor{
        var  $texto = "Lei Geral de Proteção de Dados";
        function mostrador(){
            echo "O texto aqui é um modelo de palavras baseadas em contexto algum:\n $this->texto";
        }
    }
    $objeto = new Motor;
    $objeto -> mostrador();
    $catalogo  = [
        'Automoveis' => [
        "Carro" => "BMW",
        "Metal" => "Ouro",
        "Forma" => "Quadrada",
        "Corpo do monitor" => -216.51
    ],
        'Arquiteturas' => [
            "Casa" => "A 14 metros vire a direita",
            "Igreja" => "Localizada em : 651161-16516",
            "Assembléia" => true,
            "função" => $objeto
        ]
        ];
    //Esse é um comentário de uma linha em php
    #Esse é outro comentário de uma linha em php
    /**Esse é um comentário de 
     * multiplas linhas em php
     * Utilizado para comentar de forma extensa
     */
    

    echo "<h3>$porta</h3>" . gettype($porta);
    echo "<h3>----------------------------------------------------------------------------</h3>";
    
    echo "<h3>$fecho</h3>" . gettype($fecho);
    echo "<h3>----------------------------------------------------------------------------</h3>";
    
    echo "<h3>$contador</h3>" . gettype($contador);
    echo "<h3>----------------------------------------------------------------------------</h3>";
    
    
    echo "<h3>$modulo</h3>" . gettype($modulo);
    echo "<h3>----------------------------------------------------------------------------</h3>";

    
    echo "<h3>$produto</h3>" . gettype($produto);
    echo "<h3>----------------------------------------------------------------------------</h3>";

    echo "<h3>$botão</h3>" . gettype($botão);
    echo "<h3>----------------------------------------------------------------------------</h3>";
    
    print gettype($catalogo);
    echo "<h3>----------------------------------------------------------------------------</h3>";

    echo "<br><br><h2>Condicionais:</h2>";

    if($contador > 2000 && $contador < 2){
        echo "O número é maior que 2000 e menor que 2";
    }
    else if($contador > 100 && $contador != 16.15){
        echo "Ou o número é maior que 100 e diferente de 16.15";
    }
    else{
        echo "O número é " . $contador;
    }
    print "<br>";
    switch($produto){
        case 0:
            echo "Foi zero";
            break;
        case 1:
            echo "Foi um número aí";
            break;
        case 2: 
            echo "Outra coisa foi escolhida você que sabe";
            break;
        case 20000000000:
            echo "O número é muito grande, mas você procura, acha!";
            break;
    }
    print "<br>";
    print "<br>";
    while($modulo == -48){
        echo "Esse laço vai rodar até a igualdade não ser mais satisfeita";
        $modulo++;
    }
    do{
        echo "Um cavalo nordestino, corre sem deixar função, perdido no derradeiro da estrada do sertão";
        $modulo++;
    }while($modulo < 0);
    print "<br>";
    print "<br>";
    $lista_array = [0,1,2,3,4,5,6,7,8,9,10];
    foreach($lista_array as $x){
        echo "Tabuada do $x :<br>";
        foreach ($lista_array as $y){
            echo "$x x " . "$y = " . $x*$y . "<br>";
        }
        print "<br>";
    }
    print "<br><br>";
    print("<h2>Conversão: </h2>");
    print "<br><br>";

    echo "Como está convertido para ${porta}\n Vai formando um texto de modelo ${botão}";

    $idade = 18;
    if($idade < 18){
        echo "Menor de idade sai fora";
    }
    else{
        echo "Maior de idade, e agora?pagar boleto?<br>";
    }

    $soma = 0;
    for($i = 1;$i<=5;$i++){
        for($j = $i;$j <= 5; $j++){
            $soma += $j;
            if($j == 4){
                break;
            }
        }
    }
    echo $soma . "<br>";

    $k = 0;

    while($k < 5){
        if($k ==3){
            break;
        }
        echo $k;
        $k++;
    }
    echo "\n";
    $lista = array("controle","motor","galinha","cachorro","index","simples","composto");
    foreach ($lista as $key => $value){
        echo "{$key} => {$value}\n";
    }
    foreach ($lista as $valores){
        echo "{$valores}\n";
    }
    echo "\n";

    #Variáveis de variáveis:
    $nome = "Cardoso";#variável normal
    $$nome = "Roberto";#váriável da primeira variável nome
    $$$nome = "Galvão";#variável da segunda variável nome
    echo "{$nome}\n";#chama a primeira variável nome
    echo "{$$nome}\n";#chama a segunda variável nome
    echo "{$$$nome}\n\n";#chama a terceira variável nome

    $estado = "Piauí";#variável inicial
    $$estado  = "Ceará";#segunda variável da variável estádo
    echo "{$Piauí}\n";#chama a segunda variável pela string da primeira variável

    #2. Array Associativo e Interpolação de Variáveis

    $mercado  = [
        'atacado' => "Lojas Cromossomos","Lojas Mitocondriais","Lojas Complexo Golgiense","Lojas Ancilostomiase",
        'varejo' => "Construtora Odebrech","Abreu e Lima","Passadina","Guimarães",
        "tempo" => "em quanto tiver dinheiro","tudo que for possível","até onde não dever",
        "recursos" => "todos","o máximo possível","o que tiver","até onde der"
    ];
    echo "Nome do negócio {$mercado["atacado"]}\nNome da construtora {$mercado["varejo"]}\n\n";

    #3. Referências com o Caractere &
    //Variáveis ficam associadas como se fossem a mesma, veja:
    $valor = 100;
    $controle = &$valor;
    $controle = 4;
    echo "controle => {$controle}\nvalor => {$valor}\n\n";

    $produto = "eletronicos";#variável recebe o nome de outra
    //Logo $produto pode receber tudo de $eletronicos
    $eletronicos = ["tv" => ["marca" => "Samsung", "preco" => 2000]];

echo ${$produto}['tv']['marca']; // saída: Samsung

?>