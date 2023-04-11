<?php
    $velocidade = intval(fgets(STDIN));
    $distancia = intval(fgets(STDIN));
    $consumo = intval(fgets(STDIN));

    $velocidade = number_format($velocidade, 2, ".", "");
    $distancia = number_format($distancia, 2, ".", "");
    $consumo = number_format($consumo, 2, ".", "");

    $horas = $distancia/$velocidade;
    $combustivel = $distancia/$consumo;
    $horas = number_format($horas, 2, ".", "");
    $combustivel = number_format($combustivel, 2, ".", "");

    echo "Total horas: $horas<br>";
    echo "Total combustivel: $combustivel\n";
    
?>