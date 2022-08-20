<?php
//comentario de uma linha
/* comentario de bloco   
*/
    echo "Hello, World!!!";
    $num = 10;
    $name = "yumi";
    $height = 1.52;
    $isAlive = true;
    CONST AGE  = 22;

    if($isAlive){
        echo "Verdadeiro";
    }else{
        echo "Falso";
    }

    //media
    $n1 = 10;
    $n2 = 10;
    $media = ($n1+$n2)/2;
    echo "Media: " . $media;
    if($media>7){
        echo "Aprovado!";
    }else if($media == 7){
        echo "Exame!";
    }else{
        echo "Reprovado!";
    }
    // loops

    do{

    }while(true);
    $i =0;
    while($i<10){
        $i++;
    }

    for($i =1 ; $i <= 50000; $i++){
        if($i % 2 == 0){
            echo $i;
        }
    }
?>