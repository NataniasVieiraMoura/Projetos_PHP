<?php 
    //Laços de repetição, condicionais.
    //Laço while
    $c = 0;
    $s = 30;
    while($c < $s){
        $c++;
        print "Bloco de código > {$c}º";
        if($c == $s){
            print "\nfim com c: {$c} == s: {$s}\n";
        }
    }
    //Laço do{}while();
    $c = 60;
    do{
        echo "Bloco de código {$c}ª >> ";
        if($c%5 == 0){
            print "\n";
        }
        $c--;
    }while($c > $s);print "\n";

    //Laço foreach:
    $conj_comida = [
        'manha'=>[ "pão", "leite","café","queijo","manteiga","cuzcuz"
        
        ],
        'tarde'=>[
            "carne","peixe","arroz","feijão","suco","salada","farofa"
        ],
        'noite'=>[
            "sopa","pão","suco","macarronada","sandwich"
        ]

    ];
    foreach($conj_comida["manha"] as $chave => $valor ){
        echo "Chave => {$chave} >> Valor => {$valor}\n";
    }
    foreach($conj_comida["tarde"] as $chave => $valor ){
        echo "Chave => {$chave} >> Valor => {$valor}\n";
    }
    foreach($conj_comida["noite"] as $chave => $valor ){
        echo "Chave => {$chave} >> Valor => {$valor}\n";
    }

    //Laço swich:
    switch($c){
        case 20:
            echo "O número pode ser aceito para análise\n";
            break;
            case 22:
                echo " O número foi negado para tratamento\n";
                break;
                case 30:
                    echo "Essa é a porta correta parabéns\n";
                    break;
                    case 28:
                        echo "O seu acesso foi negado cód.: 23jb4\n";
                        break;
                        case 24:
                            echo "Nem tudo é flores, volte mais tarde.\n";
                            break;
                            default:
                                echo "Como você pretende trabalhar com isso hoje?\n";
                                break;
    }
    //Laço for:
        for($yuta =-280; -300 < $yuta; $yuta--){
            echo "{$yuta}: \n";
            for($lin = $yuta;$lin <= $yuta + 5; $lin++){
                print "{$lin} - ";
            }
            echo "\n";
        }

    /*Comandos de fluxo e execução continue e break:*/
    print "\n<br><h2>Texto do laço :</h2>\n";
    for($ctt = 0;$ctt > -30; $ctt--){
        if($ctt == 0){
            echo "texto {$ctt}\n";
            echo "Todas as linhas desse bloco antes do continue serão executadas\n\n";
            //Continue: continua a execução do laço ignorando as linhas do bloco atual
            continue;//teste esse comando colocando ele como comentário e veja o resultado
            echo "\nTodas as linhas desse bloco apartir do continue serão ignoradas\n";
            for($y = 0;$y< 12;$y++){
                echo "Texto {$y}";
            }
        }
        else if($ctt <> 0){
            echo "Coluna {$ctt} : ";
            for($linha=0;$linha < 3; ++$linha){
                //break: para o laço atual em execução.
                break;//teste o uso desse comando colocando comentário e veja o resultado
                print " - textinho = {$linha} -> ";
            }
            echo "\n";
        }
    }

    //Exemplo usando todos: 
    $contjob = array();
    $compras = 3000;
    while($compras >=100){
        do{
            echo "Seu saldo atual é de $compras\n";
            if($compras == 3000){
                $compras -= 100;
                print "R$" . $compras . " para cerveja\n";
                $contjob = array($compras);
            }
            elseif($compras == 2900){
                $compras -= 200;
                print "R$ " . $compras . " para transport\n";
                $contjob = array($compras);
            }
            else{
                $compras -= 100;
                print "R$ " . $compras  . " com viagem\n";
                $contjob = array($compras);
            }
            
    switch($compras){
        case 300:
            echo "R$ " . $compras+=150 . " para noitadas\n";
            $contjob = array($compras);
            break;
        case 0:
            echo "R$ " . $compras*=7.600  . " administrando as do Job.\n";
            $contjob = array($compras);
            break;
        default:
            print "R$ " . $compras-=25 . " sem sucesso no dia.\n";
            $contjob = array($compras);
            break;
    }
        }while($compras <= 300);
    for($i=0;$i < 10;$i++){
        $compras = $compras&=10 * 2000;
        $contjob = array($compras);
        echo "Ocilações de mercado do ADMjOBS R$ " . $compras+$i . "\n";
    }
    }
    //laço for:
        for($cer = 4, $de = 32, $e = 2; $cer < $de; $ce+=$e){
            echo "cer > {$cer}\nde > {$de}\nPara e == {$e}";
        }
?>
<?php

?>