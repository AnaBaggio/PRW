<?php

function trocarFonemas($palavra) {
  $trocar = array('P' => 'B','F' => 'V','T' => 'D','R' => 'L','J' => 'Z','X' => 'S');
  $frase = strtr($palavra, $trocar);
  return $frase;
}

$casos = intval(fgets(STDIN));

for ($i = 0; $i < $casos; $i++) {
  $linha = trim(fgets(STDIN));
  $palavras = explode(" ", $linha);
  $palavras = array_reverse($palavras);

  for ($j = 0; $j < count($palavras); $j++) {
    $palavras[$j] = trocarFonemas($palavras[$j]);
  }
  $criptografada = implode(" ", $palavras);
  echo $criptografada . "\n";

}