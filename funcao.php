<?php
    function PrintBR(){
        echo "<br>";
    }
    function PrintText($text){
        echo $text;
        PrintBR();
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

    function Media($number1, $number2){
        $media= ($number1+$number2)/2;
        PrintText($media);
    }

    function Media2($number1, $number2){
        $media= ($number1+$number2)/2;
        return $media;
    }
    echo "Yumi";
    PrintBR();
    echo "ADS";
    $num1 = 10;
    $num2 = 10;
    PrintText("String qualquer");
    Media($num1,$num2);
    PrintText(Media2(10,10));

?>