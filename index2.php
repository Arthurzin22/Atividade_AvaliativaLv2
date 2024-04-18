<?php

    include 'empregado.php';

$empresário1 = novo empregado ();
$empresário1 -> setNome ( 'Nome1' );
$empresário1 -> setSobrenome ( 'Sobrenome1' );
$empresário1 -> setSalarioMensal ( 3000 );

$empresário2 = novo  empregado ();
$empresário2 -> setNome ( 'Nome2' );
$empresário2 -> setSobrenome ( 'Sobrenome2' );
$empresário2 -> setSalarioMensal ( 5000 );


echo " Salário anual do gerente 1: " . $ empresário1 -> getSalarioAnual () . "\n";
echo " Salário anual do gerente 2: " . $ empresário2 -> getSalarioAnual () . "\n";

$recepcionista1 -> receberAumento ( 10 );
$recepcionista2 -> receberAumento ( 10 );


echo " Novo salário anual do empresário 1: " . $ empresário1 -> getSalarioAnual () . "\n";
echo " Novo salário anual do empresário 2: " . $ empresário2 -> getSalarioAnual () . "\n";

?>