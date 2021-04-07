<?php

/* $contador =0;
while ($contador <=150) {
echo "$contador" . PHP_EOL;
$contador = $contador + 15;
} */

/*for ($i=0; $i <=100; $i++) { 
    if ($i % 2 != 0) {
    echo $i . PHP_EOL;
    }
}*/

/*for ($contador=0; $contador <=15; $contador++) { 
    echo "#$contador" . PHP_EOL;
}*/

// vamos pular um numero no for
/* for ($contador=0; $contador <=15; $contador++) { 
  if ($contador ==13) {
      continue;
  }   
    echo "#$contador" . PHP_EOL;
} */

//parar o loop no meio do caminho 
for ($contador=0; $contador <=100; $contador++) { 
    if ($contador ==51) {
        break;
    }   
      echo "#$contador" . PHP_EOL;
  }
