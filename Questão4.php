<?php 
      /*4. Crie um script que manipule strings, utilizando aspas simples e duplas. Inclua
variáveis dentro das strings e mostre a diferença entre aspas simples e
duplas.*/  
    #Aspas simples
    $localização = 619912.619849;
    $simples = 'Texto feito utilizando Aspas simples ' . $localização;
    $situação = true;
    $composta = "Texto que utiliza duas aspas para exemplo. $situação";
    echo $simples;
    #Texto feito utilizando Aspas simples 619912.619849
    echo $composta;
    #Texto que utiliza duas aspas para exemplo. 1
    
?>