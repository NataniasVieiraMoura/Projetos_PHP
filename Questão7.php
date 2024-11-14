<?php 
    /**7. Escreva um script que recebe dois valores, converte um para inteiro e outro
para ponto flutuante, e depois realiza comparações (igualdade, maior, menor,
etc.). Exiba o resultado das comparações com explicações sobre como os
valores foram convertidos. */
class Conversor{ 
    function motor($num1, $num2){#recebe duas variaveis
        $primeiro = (int) $num1;#cada variavel é convertida respectivamente para inteiro(linha 8)
        $segundo = (float) ($num2);/* ou para decimal(linha 9) com as funções (int) e (float)respectivamente*/
        if($num1 > $num2){ #condição que compara
            echo "$num1 é maior que $num2";
        } 
        else if($num1 < $num2){ #condição que compara
            echo "$num1 é menor que $num2";
        } 
        else if ($num1 == $num2){ #condição que compara
            echo "Ambos $num1 e $num2 são iguais"; 
        } 
    }
}
$obj = new Conversor;#cria um objeto
$obj->motor(12.5,24);#função motor do objeto recebe valores que serão convertidos e comparados
#12.5 é menor que 24
?>