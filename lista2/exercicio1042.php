<?php
    $a = fgets(STDIN);
    $b = fgets(STDIN);
    $c = fgets(STDIN);
    $comparador;

    $cont1=$a;
    $cont2=$b;
    $cont3=$c;

    if ($cont1<$cont2)
    {
        $comparador=$cont1;
        $cont1=$cont2;
        $cont2=$comparador;
    }

    if ($cont2<$cont3)
    {
        $comparador=$cont2;
        $cont2=$cont3;
        $cont3=$comparador;
    }

    if ($cont1<$cont2)
    {
        $comparador=$cont1;
        $cont1=$cont2;
        $cont2=$comparador;
    }

    echo "$cont3\n$cont2\n$cont1\n$a\n$b\n$c";


?>