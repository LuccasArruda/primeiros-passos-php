<?php
    $idade = 16;
    $numeroDePessoas = 1;

    if ($idade >= 18) {
        echo "Você pode entrar! Você tem $idade anos."; 
    }
    else if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "você está acompanhado e tem $idade anos! Pode entrar.";
    } 
    else{        
        echo "Você não pode entrar!";
    }

    echo ' Até mais :)';