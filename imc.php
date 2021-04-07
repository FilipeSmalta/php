<?php
$peso= 106;
$altura= 1.80;
$imc= $peso/$altura **2;
echo"Seu imc é de $imc. voce está com o imc ";
if($imc <18) {
    echo "Abaixo";
}elseif ($imc<25) {
    echo"Dentro";
}else{
    echo"acima ";
}

echo"do recomendado";