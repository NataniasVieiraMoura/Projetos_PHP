<?php 
    /**6. Defina uma constante chamada TAXA com o valor de 0.1 (representando
10%) e crie um script que calcule o preço final de um produto após aplicar
essa taxa. Utilize operadores aritméticos para calcular o valor final e exiba o
resultado.
 */
    define("Taxa_fixa",0.1);#constante
    $preço_bruto = 2300;
    define("Ipi_padrão", 0.2);
    $preço_liquido = $preço_bruto - ($preço_bruto * Taxa_fixa);
    echo "Com uma taxa de R$ " . Taxa_fixa . " sobre um preço bruto de R$
" . $preço_bruto . " e portanto o preço liquido fica por R$ " . $preço_liquido;
#Com uma taxa de R$ 0.1 sobre um preço bruto de R$ 2300 e portanto o preço liquido fica por R$ 2070
    $imposto = $preço_liquido-($preço_liquido * Ipi_padrão);
    $imposto = $preço_liquido+($preço_liquido * Ipi_padrão);
    $imposto = $preço_liquido+($preço_liquido * Ipi_padrão);
    echo "O imposto cobrado pós taxa_fixa de abatimento é de R$ " . Ipi_padrão  . " , logo o seu $imposto vai ser de R$ " . $imposto;
#O imposto cobrado pós taxa_fixa de abatimento é de R$ 0.2 , logo o seu 2484 vai ser de R$ 2484
?>