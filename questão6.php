
<?php
/**6. Manipulação de Data e Hora:
○ Escreva um script PHP que defina o fuso horário para "America/Sao_Paulo"
e exiba a data atual no formato "d/m/Y H:i */
// Definindo o fuso horário para "America/Sao_Paulo"
date_default_timezone_set("America/Sao_Paulo");

// Obtendo a data e hora atual
$dataAtual = date("d/m/Y H:i");

// Exibindo a data e hora atual
echo "A data e hora atual em São Paulo é: $dataAtual";
?>
