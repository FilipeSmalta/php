<?php
$idade = 10;
$npessoas =0;
echo "voce só pode entrar se tiver mais de 18 anos";
echo " e apartir de 17 acompanhado".PHP_EOL;
if ($idade >=18){ 
echo "voce tem $idade anos. entao pode entrar sozinho " .PHP_EOL;
} else {
    if( $idade <=16 && $npessoas >=1) {
        echo "voce tem $idade anos,  está acompanhado,etão, pode entrar";
    } else{ 
    echo "voce tem menos de 18 anos, entao, nao pode entrar ";
}
}