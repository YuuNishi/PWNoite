<?php
    function PrintBR(){
        echo "<br>";
    }
    function PrintText($text){
        echo $text;
    }
    function Sum($number1, $number2){
        $sum = $number1 + $number2;
        PrintText($sum);
    }
    function Sub($number1, $number2){
        $sub = $number1 - $number2;
        PrintText($sub);
    }
    echo "Yumi";
    PrintBR();
    echo "ADS";

    PrintText("String qualquer");
?>