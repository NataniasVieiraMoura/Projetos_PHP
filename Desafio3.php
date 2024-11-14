<?php 
/*3. Escreva um script que receba um array de números inteiros e execute as
    seguintes operações:
    ● Calcule a soma de todos os elementos.
    ● Encontre o maior e o menor valor do array.
    ● Remova os valores duplicados.
    ● Inverta a ordem dos elementos.*/
    $compilado = array(50,6,30,84,10,11,22,99,1,6843,1,1,0,99,6,35,);
    $soma = array_sum($compilado);
    $maior = max($compilado);
    $menor = min($compilado);
    #array_unique() para remover valores duplicados
    $valores_unicos = array_unique($compilado);
    #sort() ordena um array
    $ordenada = sort($compilado);
    #array_reverse() inverte a ordem do array
    $inversa = rsort($compilado);
    #array_rsot() ordena o array de forma descendente
    #assort() ordena um array associativo em ordem ascendente pelos valores
    #ksort() ordena um array associativo em ordem ascendente pelas chaves
    #print_r() ou var_dump() para exibir um array
    print_r($compilado);
    echo "A soma dos valores contidos no array é de " . $soma . "\n";
    print "O maior valor no array é de " . $maior . "\n";
    echo "O menor valor no array é de " . $menor . "\n";
    echo "O array ordenado fica: ";
    print_r($ordenada);
    echo "\nA inversão da ordem do array fica: ";
    print_r($inversa);
?>