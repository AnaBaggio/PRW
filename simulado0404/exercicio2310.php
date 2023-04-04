<?php
    for ($i = 0; $i < 100; $i++) {
        $n[$i] = intval(fgets(STDIN));
    }

    for ($i = 0; $i < 100; $i++) {
        $S = $n[$i];
        $B = $n[$i];
        $A = $n[$i];

        $n[$i] = $S[($S1+$S2+$S3)/3];
        $n[$i] = $B[($B1+$B2+$B3)/3];
        $n[$i] = $A[($A1+$A2+$A3)/3];
        
    }

    echo "Pontos de Saque: $n[$i] = $S %\n";
    echo "Pontos de Bloqueio: $n[$i] = $B %\n";
    echo "Pontos de Ataque: $n[$i] = $A %\n";

?>