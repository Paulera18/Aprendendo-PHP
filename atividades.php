<?php

/*NUMEROS IMPARES*/
/*
for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 != 0) {
        echo $contador . PHP_EOL;
    }
}


/*TABUADA*/
/*
$MULTIPLICADOR = 3;

FOR ($i = 1; $i < 10; $i++) {
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}


/*CALCULO IMC */
$peso = 98;
$altura = 1.74;
$imc = $peso / $altura ** 2;/*altura ao quadrado*/

echo "Seu IMC é de $imc. Voce esta com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";
























