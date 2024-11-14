<?php 
    #Comentário em php:
    #Comentário de uma linha;
    //Comentário de uma linha;
    /**Comentário de multiplas linhas pode ser utilizada no meio de códigos*/
    echo "Resultado: " . 34 * ( -3234 /* + 4234 / 542 % 2 / (23 * 34 )*/ / 5);
    echo "\n";

    //echo pode ser declarado com ou sem ():
    echo ("O formato novo das relações públicas\n");

    //formas de exibir
    echo "<p>Olá, mundo como vai?</p>\n";
    print "<p>Eu estou bem, e você?</p>\n";

    //Aspas simples exige ponto ao ser concatenada no texto:
    $modelo = 'transporte';
    echo "O " . $modelo . " segue o padrão internacional\n";

    //Aspas duplas pode ser inserido diretamente no texto:
    $cce = "brastemp";
    echo ("A saída da {$cce} no país se deu por ...\n");

    //A função retorna o tipo de dados e o valor:var_dump()
    echo("\n");
    var_dump("texto");
    echo("\n");
    var_dump(true);
    echo("\n");
    var_dump(23.43);
    echo("\n");


    //Atribuição de vários valores:
    $setup = $conexão = $dedicado = "manto mágico";

    $lista_compras = [
        [
            'nome' => "Eduarda",
            'idade' => 34,
            'CEP' =>23012.842
        ],
        [
            'nome' => 'Cardoso',
            'idade' => 74,
            'CEP' => 98642.562
        ]];
    print "Array sem muita descrição<br>";
    print_r($lista_compras);
    echo "<br><br>";
    echo "Array detalhado<br>";
    var_dump($lista_compras);

    //PHP aceita valores expoentes e em outras bases
    $expo = 12e5;
    echo "<br>$expo<br>";
    
    print "<h1>Regras estranhas:</h1>";

    $cont = "23";
    $dobro = 12;
    $mengão = "2 jogos";
    echo $cont+$dobro+$mengão . "<br>";

    $te = "19";//string
    $ce = "6";//string
    $soma = (int) $te + $ce;#converte para inteiro
    echo $soma . "<br>";

    $pro = "3.20";
    $val = "9.11";
    $com = (float) $pro + $val;
    $trat = "240";
    $turco = -20.999;
    $son = (int) $trat + (int) $turco;//arredonda $turco para 20
    echo "\n{$son}\n";
    echo $com . "<br>";

    $gal = "99";
    $sot = "00";
    $r = $gal + $sot;
    echo $r . "<br>";

    echo gettype($r) . "<br>";//função de tipo de variável
    echo gettype($gal) . "<br>";
    echo gettype($soma) . "<br>";
    echo gettype($te) . "<br>";

    $closet = true;
    $porão = false;
    define("GAUSIANIDADE",9.8165);//variavel constante
    $semvalor = null;
    $notas = 23.43;
    $posição = 44;
    $letras = "Confimação";
    $palavra = 'F';//tipo char
    echo gettype($closet) . "<br>";
    echo gettype($porão) . "<br>";
    echo gettype(GAUSIANIDADE) . "<br>";
    echo gettype($semvalor) . "<br>";
    echo gettype($notas) . "<br>";
    echo gettype($posição) . "<br>";
    echo gettype($letras) . "<br>";
    echo gettype($palavras) . "<br>";
    $open = !$porão;
    echo $porão . "<br>";
    echo $open . "<br>";
    echo "<h1>Pré e pós incremento:</h1><br>";
    $c = 0;
    echo "Pré-incremento<br>";
    for($i = 0; $i <= 10;$i++){
        echo "$i -> " . ++$c . "<br>";
    }
    echo "<br><br>";
    echo "Pós-incremento<br>";
    for($i = 0; $i <= 10;$i++){
        echo "$i -> " . $c++ . "<br>";
    }
    echo "<br><br>";
    $c = 10;
    echo "Pré-decremento<br>";
    for($i = 1; $i <= 10;$i++){
        echo "$i -> " . --$c . "<br>";
    }
    $c = 10;
    echo "<br><br>";
    echo "Pós-decremento<br>";
    for($i = 1; $i <= 10;$i++){
        echo "$i -> " . $c-- . "<br>";
    }
    echo "<br><br>";
    echo "<h2>Operadores artiméticos</h2>";
    $num1 = 30;
    $num2 = 20;
    $resultado = $num1 + $num2;//soma
    $resultado = $num1 - $num2;//subtração
    $resultado = $num1 % $num2;//resto divisão
    $resultado = $num1 / $num2;//divisão
    $res = $num1 += $num2;//somatória de somas
    $res = $num1 -= $num2;//somatória de subtrações
    $res = $num1 %= $num2;//somatória de restos da divisão
    $res = $num1 /= $num2;//somatória de divisões
    $res = $num1 *= $num2;//somatória de multiplicações;
    $porta = true;
    $anti = false;
    $final = $porta &= $anti;
    $c = 0;
    echo $final . "<br>";//0 é false
    $final = $porta |= $anti;
    echo $final. "<br>";
    $final = $porta ^= $anti;//esse operador é o "ou, ou"
    echo $final. "<br>";

    echo "<h2>Operadores condicionais:</h2><br>";
    $p = true;
    $a = false;
    $a = $p === $a;//identico á(igual e do mesmo tipo)
    $a = $p == $a;//igual á
    $p = !$a;//contrapositiva(negação de )
    $p = $a <> $p;//diferente de
    $p = $a != $p;//diferente de
    $p = $a !== $p;//não identico á(não são do mesmo tipo[Ex.: string -> "8" and int 8 => false])
    $ponto = $a and $p;//operação lógica e
    $ponto = $a or $p;//operação lógica ou
    $ponto = $a || $p;//operação lógica ou
    $ponto = $a && $p;//operação lógica e
    $ponto = $a;
    $ponto = 23;
    $conto = 46;
    $forma = true;
    $caso = $forma > $conto;//maior
    $caso = $forma < $conto;//menor
    $caso = $forma >= $conto;//maior que
    $caso = $forma <= $conto;//menor que

    #Para verificar se um campo está vazio ou preenchido utilize o empty
    #Retorna verdadeiro se o campo estiver vazio.
    if(empty($ponto) or empty($caso) || empty($p)){//se campos forem nulos empty() retorna true, se não, else.
        echo "<br>Preecha todos os campos por favor.<br>";
    }

    #Operador ternário:
    $condição = $caso === $forma ? "São identicos" : "Não são identicos";
    echo "\n\n$condição\n\n";
    $nota1 = 9.34;
    $nota2 = 8.90;
    $média = ($nota1 + $nota2)/2;
    $prova = $média >= 7? "Você está passado" : "Você foi reprovado";
    echo "\nSua situação: {$prova} pois ficou com média {$média}\n";

    #Concatenando duas variáveis:
    $tudo = "o contexto de vida ";
    $nem = "para a formação do ecossistema natural...";
    $concat .= $tudo;
    $concat = $concat . $nem;
    $concat = "Mas assim [...] $concat";
    echo "Resposta: " . $concat . "\n";

    function relogio(){
        $rel = new DateTime();//chama a classe
        $horario = $rel->format('H:i:s');//chama a função e o parametro
        echo "A hora atual é :" . $horario . "\n";//retorna um texto
    }
    relogio();
    function texto($nome){
        echo "Então seu nome é Sr.: $nome. Bem vindo. \n";
    }
    texto("Contorno");
    #Array associativo
    $marcas = 
    [
        'macas' =>[
            'VW','Renalt',"Citroen","Chevrolet","Ford","AUDI","RAM"

        ],
        'modelos' =>[
            '6a51d',"s51d","sd91f","4hjf","9df4","8d4f"
        ],
        'locais' => [
            "zona 21", "leste ribeiro","Camargo palace","Teolino"
        ]
    ];
    print_r($marcas['locais'][3]);
    echo "\n";
    var_dump($marcas['modelos'][2]);

    $sot = "34.35";
    $div = "23";
    $sot = (int) $sot;
    $div = (float) $div;
    $compara = $sot > $div? "Sim, sot é maior que div" : "Não, sot é menor que div";
    echo $compara;
    
    //Expressões: 
    $be = $ah = 100;
        

?>