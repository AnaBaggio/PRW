<?php
    $K = readline();
    $N = readline();
    $M = readline();
    $X = readline();
    $Y = readline();
    
    if($N = $M){
        echo "divisa";
    }
    else if($N < 0 and $M > 0){
        echo "NE";
    }
    else if($N > 0 and $M > 0){
        echo "NO";
    }
    else if($N < 0 and $M > 0){
        echo "SO";
    }
    else if($N < 0 and $M < 0){
        echo "NE";
    }

?>