<?php   
    $altura = 1.50;
    $peso = 60;
    $imc = $peso/($altura**2);

    echo "IMC = $imc".PHP_EOL;

    if ($imc < 18.5){
        echo 'Abaixo do Peso';
    }
    else if ($imc >= 18.5 && $imc < 24.9){
        echo 'Peso Normal';
    } else if ($imc >= 24.9 && $imc < 29.9){
        echo 'Sobrepeso';
    } else if ($imc >= 29.9 && $imc < 34.9){
        echo 'Obesidade I';
    } else {
        echo 'Obesidade II e III';
    }