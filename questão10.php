
<?php
/**10. Geração Dinâmica de Conteúdo HTML:
○ Crie um script PHP que gere dinamicamente uma tabela HTML contendo três
colunas (Nome, Idade, Cidade) e três linhas de dados. Use variáveis para
armazenar os valores de cada célula. */

// Declaração das variáveis para cada célula
$nome1 = "João";
$idade1 = 30;
$cidade1 = "Teresina";

$nome2 = "Maria";
$idade2 = 25;
$cidade2 = "São Paulo";

$nome3 = "Carlos";
$idade3 = 28;
$cidade3 = "Rio de Janeiro";

// Gerando a tabela HTML dinamicamente
echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Idade</th><th>Cidade</th></tr>";
echo "<tr><td>$nome1</td><td>$idade1</td><td>$cidade1</td></tr>";
echo "<tr><td>$nome2</td><td>$idade2</td><td>$cidade2</td></tr>";
echo "<tr><td>$nome3</td><td>$idade3</td><td>$cidade3</td></tr>";
echo "</table>";
?>
