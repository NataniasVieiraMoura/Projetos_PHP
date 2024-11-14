
<?php
// Declaração das variáveis
/**3. Concatenação de Strings:
○ Crie um script PHP que declare duas variáveis contendo nomes e exiba uma
frase concatenando essas duas variáveis. Utilize tanto aspas duplas quanto
aspas simples para demonstrar as diferenças. */
$nome1 = 'João';
$nome2 = "Silva";

// Concatenação utilizando aspas simples
$frase1 = 'Meu nome é ' . $nome1 . ' ' . $nome2 . '.';
echo $frase1 . "<br>";

// Concatenação utilizando aspas duplas
$frase2 = "Meu nome é $nome1 $nome2.";
echo $frase2;
?>
