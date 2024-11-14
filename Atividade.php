

Pular para o conteúdo
Como usar o Gmail com leitores de tela

Você pode perder o acesso ao seu histórico de 6 anos do Gmail
Adicionar um telefone e e-mail de recuperação pode ajudar você a fazer login e manter sua conta segura
Adicionar informações de recuperaçãoDispensar
Conversas

Não lidas
 
1–12 de 12
 
Todas as demais
 
1,89 GB de 15 GB usado(s)
Termos · Privacidade · Regulamentos do programa
Última atividade da conta: há 0 minuto
Aberta em um outro local · Detalhes
 <?php //QUESTÃO 01
$booleano = true;
$inteiro = 19;
$pontoFlutuante = 2.500;
$string = "Pedro";

echo "QUESTÃO 01" . "<br>";
echo "Tipo: " . gettype($booleano) . ", Valor: $booleano" . "<br>";
echo "Tipo: " . gettype($inteiro) . ", Valor: $inteiro" . "<br>";
echo "Tipo: " . gettype($pontoFlutuante) . ", Valor: $pontoFlutuante" . "<br>";
echo "Tipo: " . gettype($string) . ", Valor: $string" . "<br>". "<br>";;
?>

<?php //QUESTÃO 02
$num1 = 10;
$num2 = 5;

$adição = $num1 + $num2;
$subtração = $num1 - $num2;
$multiplicação = $num1 * $num2;
$divisão = $num1 / $num2;
$módulo = $num1 % $num2;

echo "QUESTÃO 02" . "<br>";
echo "Adição: $num1 + $num2 = $adição\n" . "<br>";
echo "Subtração: $num1 - $num2 = $subtração\n" . "<br>";

echo "Multiplicação: $num1 * $num2 = $multiplicação\n" . "<br>";
echo "Divisão: $num1 / $num2 = $divisão\n" . "<br>";
echo "Módulo: $num1 % $num2 = $módulo\n" . "<br>"  ."<br>";
?>

<?php //QUESTÃO 03
$carros = [
    "Toyota" => "Hilux",
    "Honda" => "Civic",
    "Ford" => "Focus",
    "Chevrolet" => "Camaro"
];
echo "QUESTÃO 03" . "<br>";
echo "Modelo da Toyota: " . $carros["Toyota"]  ."<br>";
echo "Modelo da Honda: " . $carros["Honda"] ."<br>";
echo "Modelo da Ford: " . $carros["Ford"] ."<br>";
echo "Modelo da Chevrolet: " . $carros["Chevrolet"] ."<br>";

$carros["Volkswagen"] = "Jetta";
$carros["Hyundai"] = "HB20";

echo "Array atualizado: ";
print_r($carros);
?>

<?php //QUESTÃO 04
echo "<br>". "<br>";
$nome = "Pedro Weslley";
$idade = 19;

$mensagemDuplas = "Meu nome é $nome e eu tenho $idade anos.";

$mensagemSimples = 'Meu nome é $nome e eu tenho $idade anos.';

echo "QUESTÃO 04" . "<br>";
echo "Com aspas duplas: $mensagemDuplas" . "<br>"; 
echo "Com aspas simples: $mensagemSimples" . "<br>" . "<br>";
?>

<?php  //QUESTÃO 05
class Computador {

    public $cpu;

    public function __construct($cpu) {
        $this->cpu = $cpu;
    }
    public function ligar() {
        echo "QUESTÃO 05" . "<br>";
        echo "O computador com CPU {$this->cpu} está ligado."  . "<br>" . "<br>";
    }
}
$meuComputador = new Computador("Intel Core i7");
$meuComputador->ligar();
?>

<?php //QUESTÃO 06
define("TAXA", 0.1);
$precoProduto = 100.00; 
$valorTaxa = $precoProduto * TAXA;
$precoFinal = $precoProduto + $valorTaxa;

echo "QUESTÃO 06" . "<br>";
echo "Preço inicial do produto: R$ $precoProduto" . "<br>";
echo "Valor da taxa: R$ $valorTaxa" . "<br>";
echo "Preço final do produto após aplicar a taxa: R$ $precoFinal" . "<br>". "<br>";
?>

<?php

//questão 7
$valorInteiro = intval(readline("Digite um valor (inteiro): "));
$valorFloat = floatval(readline("Digite outro valor (ponto flutuante): "));

// Exibe as conversões
echo "QUESTÃO 07" . "<br>";
echo "Valor inteiro: $valorInteiro" . "<br>";
echo "Valor ponto flutuante: $valorFloat" . "<br>";

// Comparações
echo ($valorInteiro === $valorFloat) ? "$valorInteiro é igual a $valorFloat.\n" : "$valorInteiro não é igual a $valorFloat." . "<br>";
echo ($valorInteiro > $valorFloat) ? "$valorInteiro é maior que $valorFloat.\n" : "$valorInteiro não é maior que $valorFloat." . "<br>";
echo ($valorInteiro < $valorFloat) ? "$valorInteiro é menor que $valorFloat.\n" : "$valorInteiro não é menor que $valorFloat." . "<br>";
?>
