<?php 
/*2. Escreva um script em PHP que receba um parágrafo de texto, substitua todas
as ocorrências de uma palavra específica por outra, conte o número de
palavras e exiba o texto formatado. Utilize funções de manipulação de strings
e expressões regulares.*/
function editxt($plv_alvo,$nova,$texto){#função que edita texto
    /**Parametros:
     * $texto é o texto escolhido;
     * $plv_alvo é a palavra que deseja alterar;
     * $nova é a nova palavra que deseja inserir no local da anterior;
     */
    $txtantes = strlen($texto);#quantidade de letras antes da anteração
    $txtmod = str_replace($plv_alvo,$nova,$texto);#varável recebe a alteração
    $txtagora = strlen($txtmod);#quantidade de letras agora
    #na linhas abaixo quantidade de letas antes da alteração
    echo "O texto :`" . $texto . "` possuia " . $txtantes . " letras\n";
    #na linhas abaixo quantidade de letas depois da alteração
    echo "O texto :`" . $txtmod . " possui " . $txtagora . "` letras";
}
$frase = "O formalismo é um modelo desenvolvido por Max Weber para descrever a burocracia nas organização";#texto de exemplo
/**Abaixo: função que recebe os parametros: 
 * palavra presente no texto que deseja alterar;
 * palacra nova que vai ser inserida no texto;
 * texto que vai ser manipulado
 */
editxt("Max Weber","Sulber Chartz",$frase);

?>