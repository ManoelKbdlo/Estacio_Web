<?php

$salario = $_GET['salario'];
$prestacao = $_GET['prestacao'];
$margem = $salario * 0.3;

if ($prestacao < $margem) {
    echo " Seu limite de consignação é :". $margem;
    echo " Seu emprestima foi aprovado!";
}
else {
    echo " Seu limite de consignação é :". $margem;
    echo " Seu emprestima foi reaprovado!";

}



?>