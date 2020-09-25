<?php

$altura = 1.85;
$peso = 80;

$imc = $peso / ($altura ** 2);

$dicionario = [
    18.5 => "Abaixo do peso",
    24.9 => "Peso normal",
    29.9 => "Sobrepeso",
    34.9 => "Obesidade grau 1",
    39.9 => "Obesidade grau 2",
    40.0 => "Obesidade grau 3"
];

foreach($dicionario as $key => $value){
    //Se a chave for menor que 40, então testa os valores de acordo com o IMC. 
    if($key < 40.0){
        if($imc <= $key){
            echo PHP_EOL."$value";
            break;
        }
    }else{ //Se a chave for maior ou igual a 40
        echo PHP_EOL."$value";
    }
}



?>