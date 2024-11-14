<?php 
    /**5. Crie uma classe Computador com uma propriedade cpu e um método
    ligar(). Instancie um objeto dessa classe e chame o método */
        class Computador{var $cpu;
             function ligar(){
                 echo "Ligando computadora {$this->cpu}...";}
}
            $obj = new Computador;
            $obj->cpu = "1000W";
            $obj->ligar();
        #Ligando computador a 1000W...
?>