
<?php
/**8. Criação de Funções Personalizadas:
○ Implemente uma função em PHP chamada exibirMensagem que receba
um parâmetro $nome e exiba a mensagem "Bem-vindo, [nome]!" na tela.
Teste a função com diferentes nomes. */
// Definindo a função exibirMensagem
function exibirMensagem($nome) {
    echo "Bem-vindo, $nome!<br>";
}

// Testando a função com diferentes nomes
exibirMensagem("João");
exibirMensagem("Maria");
exibirMensagem("Carlos");
?>
