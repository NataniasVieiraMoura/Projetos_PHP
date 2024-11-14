<?php 
    $valor_qualq = readline("Digite true ou false: ");
    if($valor_qualq === "true"){
        echo "Um valor pode ser verdadeiro se for tautológico";
    }
    elseif($valor_qualq === "false"){
        print "Uma variável pode não ser verdadeira, logo falsa";
    }
    else{
        print "O tipo da variável não é boolean. Tente novamente";
    }
?>