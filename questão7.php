
<?php
/**7. Validação de Nomes de Variáveis:
○ Implemente um script PHP onde você declare algumas variáveis seguindo as
regras de boas práticas, como $nome_cliente, $idade_cliente, e
$endereco_cliente. Depois, crie variáveis com nomes inválidos (como
$123nome ou $nome-cliente) e explique, usando comentários, por que
esses nomes são inválidos. */
// Declaração de variáveis seguindo boas práticas
$nome_cliente = "João Silva";
$idade_cliente = 30;
$endereco_cliente = "Rua das Flores, 123";

// Exibindo as variáveis válidas
echo "Nome: $nome_cliente<br>";
echo "Idade: $idade_cliente<br>";
echo "Endereço: $endereco_cliente<br>";

// Tentativa de declaração de variáveis com nomes inválidos
// $123nome = "Inválido"; // Inválido porque nomes de variáveis não podem começar com números
// $nome-cliente = "Inválido"; // Inválido porque nomes de variáveis não podem conter hífens
// $nome cliente = "Inválido"; // Inválido porque nomes de variáveis não podem conter espaços

/*
Explicação:
1. $123nome: Nomes de variáveis não podem começar com números. Devem começar com uma letra ou um sublinhado (_).
2. $nome-cliente: Nomes de variáveis não podem conter hífens. Utilize sublinhados (_) para separar palavras.
3. $nome cliente: Nomes de variáveis não podem conter espaços. Utilize sublinhados (_) ou camelCase para separar palavras.
*/
?>
