
<?php
/**5. Funções de Saída:
○ Crie um script PHP que:
■ Use o comando print para exibir uma frase.

ALUNO1

■ Utilize var_dump() para imprimir o conteúdo de um array contendo
três nomes de cidades.
■ Utilize print_r() para exibir o mesmo array de uma forma mais
legível. */

// Usando o comando print para exibir uma frase
print "Olá, eu sou o ALUNO1!<br>";

// Declarando um array com três nomes de cidades
$cidades = array("Teresina", "São Paulo", "Rio de Janeiro");

// Utilizando var_dump() para imprimir o conteúdo do array
echo "Usando var_dump():<br>";
var_dump($cidades);
echo "<br>";

// Utilizando print_r() para exibir o mesmo array de uma forma mais legível
echo "Usando print_r():<br>";
print_r($cidades);
?>

