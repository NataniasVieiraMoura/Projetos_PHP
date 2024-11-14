<?php 
    //Ler valores no php: 
    //$ler = readline("Nome:");
    //$lernum = readline("Idade:");

    //Funções:
    function motor($texto){
        echo "texto digitado foi: " . $texto . "\n";
        }
    //motor("controle de auto peças do Ivanildon");
    //motor("A fonte filosofica do novo Epstemiologico sistema itravenoso");
    
    //Função recursiva:
    function pista($corredor){//função recebe um parametro
        if($corredor <= 1){//una codição de parada pelo valor do parametro
                echo "{$corredor}\n";//exibe o parametro em cada loop
                pista($corredor+1);/*A condição chama novamente a função pista somando o parametro mais um*/
        }//O loop encerra quando o parametro tive uma soma que satisfaça a condição.
    }
    //pista(10);
    
    //Função com comando return:
    function casamater($num,$num2,$num3,$num4){
        $media = ($num+$num2+$num3+$num4)/4;
        return $media;
    }
    print casamater(2.34,10,7.43,6.45);
    
    $condição = true;
    if($condição){ function texto($palavra){ echo "\nA palavra escolhida para tratar o estudo: {$palavra}";}}else{ echo "\nErro.\n";}
    //texto("Albert Aisenhawer.\n");

    //Função que concatena a um texto outro:
    function tratamento(&$compilado){
        $compilado .= " tal que o contrato pode ser adicionado\n";

    }
    $texticulo = "formação de contrato residual é";
    //tratamento($texticulo);
    //print "{$texticulo}";

    //Outras formas de atribuir valores a parametros:
    function catalogo($yuri=999.99){//parametro com valor padrão
        return "Sua escrita é uma forma horrível de expressão!Sua qualidade é {$yuri} abaixo da média;\n";
        
    }
    //print catalogo();//retorna o padrão estabelecido
    //echo catalogo(60.32);//outro valor de mesmo tipo
    //echo catalogo(true);//perceba que o tipo muda, mas a linguagem aceita
    //echo catalogo("predominantemente");//veja que a variável recebe string
    //print catalogo(null);//nulo não retorna nada

    //Tipos não escalares como valores padrão:
    function contato($tratado=array("avião"),$portaria=NULL){
        $complemento = is_null($portaria) ? " você  pilota\n" : " você dirige\n";
        return "\nPara o transporte ". join(",",$tratado) . $complemento;
    }    
    //print contato(array("moto","carro","trem"),true);

    //Uso correto de parametros na função:
    function textualizar($vontade=10,$potencia=100,$verbo=2){
        $formula = ($vontade**$potencia)/$verbo;
        return "\nO controle de um ser pela sua própia existencia é " . $formula;
    }
    /**Por padrão os valores da função devem ser declarados na ordem que eles foram
     * colocados na função, caso deseje declara em outra ordem determine o parametro 
     * como no exemplo abaixo
     */
    //para determinar valor ao parametro:
    //digite o nome do parametro sem $;
    //utilize dois pontos (:) para atribuição;
    print textualizar(potencia:125,verbo:45,vontade:15);
    print("\n");

    //um parametro que torna-se array para ler mais de um valor:
    function restos(...$nvalor){/*esses ... indica que quando for passado mais de um valor, o parametro será um array dos valores.*/
        for($x=0;$x < count($nvalor);$x++){
            print_r($nvalor[$x] . "\n");
        }
        foreach($nvalor as $val){
            echo "valor > " . $val . "\n";
        }
        foreach($nvalor as $key => $value){
            echo "Chave {$key} fica Valor {$value}\n";
        }
    }
    //restos(10,20,"texto",true,false,23.43);

    function somador($ah,$bee,$cee){//multiplos parametros
        $rest = $ah + $bee + $cee;
        return $rest;
    }
    $dados = [23,12,2.34];//array de valores
    //print somador(...$dados);//reticencias atribui valores do array $dados para cada parametro
    //echo somador(...[100,1000,99])/*pode usar diretamente um array para definir valores aos parametros*/

    function quatro($s,$t,$q=10,$y=9){//algums parametros exigem valor e outros possuem padrão
        $tudo = $s+$t+$q+$y;
        print "Resultado : {$tudo}\n";
    }
    quatro(...[20,10],y:20);/*aqueles valores que não foram atribuidos recebem o array, e os padrões podem ser alterados para outro valor*/
    quatro(...['t' => 120,'s'=> 40],q:'1');/*veja que o array tem nomes iguais aos parametros
    perceba que ele interpleta strings com numeros*/

    //Posso usar uma variável como função se a string for nome de função com abaixo:
    $vfunção = 'quatro';//variável recebe um texto string com mesmo nome de uma função
    $vfunção(...[9,10,100,1000]);/*quando a variavel é chamada como função o php procura a função com mesmo nome da string que essa variável recebeu*/
    //nesse exemplo vfunção recebe string quatro. Quando vfunção é chamada como função, o php
    //procura a função de mesmo nome que foi atribuida a vfunção.



    //Escopo das variáveis do php:
    $gato = "raça nova 23v23v";//variável global
    //variáveis globais podem ser acessadas por todo o código
    function pets(){
        $chiuzinho = "pet da coleção 234";//variável local
        /*variáveis locais são acessíveis somente dentro do bloco de código(no caso, o da função  pets())*/
        return $chiuzinho . " raça pura do japão.\n";
    }

    print pets();

    //Palavra chave global:
    //serve para acessar variáveis globais de dentro da função:
    $mono = "23 controles";//variável global
    $double = 2000;//variável global
    function peteca(){
        global $mono,$double;//chama as variáveis globais 
        $resultado = (int) $mono + $double;
        echo "O valor estudado retorna: {$resultado}\n";
    }
    peteca();

    //Variáveis globais são armazenadas em um array chamado $GLOBAL[index]:
    $portaria = 100;
    $ementa = true;
    $pobresa = "Calisto";
    function juntador(){
        $GLOBALS['portaria'] .= " ]-[ ";
        $GLOBALS['portaria'] .= (string) $GLOBALS['ementa'];
        $GLOBALS['portaria'] .= " ]-[ ";
        $GLOBALS['portaria'] .= (string) $GLOBALS['pobresa'];
    }
    juntador();
    echo $GLOBALS['portaria'] . "\n";

    //PHP A palavra-chave static: 
    /*ormalmente, quando uma função é concluída/executada, todas as suas variáveis são excluídas. No entanto, às vezes queremos que uma variável local NÃO seja excluída. Precisamos dele para um mais trabalho.*/
    function presbitador(){
        static $manual = 9.234;
        echo "manual é {$manual}\n";
        $manual--;
    }
    presbitador();
    presbitador();
    presbitador();
?>
