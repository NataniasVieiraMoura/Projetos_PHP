<?php 
    
    #Programação orientada a objeto
    class Genero{#Classe
        var $pix;#variável
        function comparador(){#função
            echo "O $this->pix é uma ferramenta de transferencia interbancária com o formato block-chein";#exibe o atributo no texto
        
    }
}
$objeto = new Genero;
$objeto -> pix = "Parcelado";
$objeto -> comparador();

?>