<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$opcao=$_POST['opc'];

if($opcao=="Somar"){
    $somar=$n1+$n2;
    echo "$somar";
}

else if($opcao=="Subtrair"){
    $subt=$n1-$n2;
    echo "$subt";
}

else if($opcao=="Dividir"){
    $div=$n1/$n2;
    echo "$div";
}

else if($opcao=="Multiplicar"){
    $mult=$n1*$n2;
    echo "$mult";
}

?>