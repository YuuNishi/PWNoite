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

    function Mult($number1, $number2){
        $mult = $number1*$number2;
        PrintText($mult);
    }
    function Div($number1, $number2){
        $div = $number1 / $number2;
        PrintText($div);
    }

    echo "Yumi";
    PrintBR();
    echo "ADS";

    PrintText("String qualquer");
?>