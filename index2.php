<?php 
    Class Motocross{
        var $nome = "Maria Cardosa";
        var $idade  = 34;
        var $sexo = "Feminino";
        function parafeRnalha($nome,$idade,$sexo){
            switch($idade){
                case 10:
                    echo "Sua entrada é negada";
                    break;
                    case 20:
                        echo "acesso consedido";
                        break;
                        case 30:
                            echo "tem plano de saúde garantido";
                            break;
                            default:
                                print "Sua situação não está catalogada para que possamos entrar em acordo";
                            break;
            }
        }
    }
    $trasformador = new Motocross;
    $trasformador -> parafeRnalha("Carlos",89,"Masculino");

    #Variáveis de variáveis

    $modo = "Aberto";
    $$modo = "Fechado";
    $$$modo = "Entre-aberto";
    $$$$modo = "Entre-fechado";
    

?>