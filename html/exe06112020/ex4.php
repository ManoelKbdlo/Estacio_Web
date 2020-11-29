<?php

$nome = $_GET['nome'];
$dias = $_GET['dias'];

echo "Senhor(a)" . $nome;

if ($dias < 10 ) {
    $diaria = 40+15;
    echo "Conta Cliente :" .$dias*$diaria;
    echo "Lucro Pousada :" .$dias*$diaria;

}
else {
    $diaria = 40+8;
    echo "Conta Cliente :" .$dias*$diaria;
    echo "Lucro Pousada :" .$dias*$diaria;

}


?>