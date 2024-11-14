<?php 
/*1. Crie um script em PHP que utilize um array multidimensional para armazenar
informações sobre estados e suas cidades. A função deve receber o nome de
um estado e retornar todas as suas cidades. Adicione uma função adicional
que adicione uma nova cidade a um estado existente.
*/

#São 5 cidades para cada estado nesse array

$brasil = array(
    "MG" => array(1 => "Carapicuiba", 2 => "MonteMelo", 3 => "Andrade", 4 => "Sabará", 5 => "Gequitinhonha"),

    "SP" => array(1 => "Ozasco", 2 => "25 de Março", 3 => "Baruerí", 4 => "Chapadinha", 5 => "Higienopolis"),

    "RJ" => array(1 => "Beco do Urubu", 2 => "Mauricélia", 3 => "Adeulina", 4 => "Morro da Esperança", 5 => "Vila Nova"),

    "AL" => array(1 => "Cristina", 2 => "Ruy Ventura", 3 => "Retirantes", 4 => "Boa Vista", 5 => "Iruara"),

    "BA" => array(1 => "Maltes", 2 => "Bebedouro", 3 => "Vale Verde", 4 => "Capesinhos", 5 => "Bocaiúva")
);

class Controle2 {#Classe
    public $brasil;#variável externa foi incorporada a essa classe para ser manipulada internamente
    public function __construct($brasil){#métdo construtor com parametro dos estados
        $this->brasil = $brasil;#atributo recebe o array
    }
    public function cidades($sigla_estado){#função com parametro da sigla do estado desejado
        for($i = 1; $i <= 5; $i++){#loop que mostra as 5 cidades do estado selecionado
            print $this->brasil[$sigla_estado][$i] . "\n";#exibe o resultado
        }
    }
    public function editar($sigla_estado,$posição,$novo){#função que edita os valores
        /**Parametros: 
         * $sigla_estado é o estado que deseja editar;
         * $posição é a posição que deseja alterar no $sigla_estado;
         * $novol é o novo valor que deseja atribuir a $sigla_estado na $posição
         */
        echo "Antes: " . $this->brasil[$sigla_estado][$posição] . "\n";#antes de alterar
        $this->brasil[$sigla_estado][$posição] = $novo;#alterando
        echo "Depois :" .  $this->brasil[$sigla_estado][$posição];}}#após alterar


$obj_brasil = new Controle2($brasil);#novo objeto criado
$obj_brasil->cidades("MG");#visualização de valores pela função cidades()

$alteração = new Controle2($brasil);#novo objeto craido
$alteração->editar("MG",3,"Xique-Xaque");/*editando a cidade pelos paramentros. Vai retornar o antes e depois*/

$obj = new Controle2($brasil);#novo objeto criado
$obj->cidades("MG");
?>


