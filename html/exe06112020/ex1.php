<?php

$nome = $_GET['nome'];
$salario = $_GET['salario'];
$aumento = $_GET['aumento'];

$novoSal = ($salario * $aumento)/100;
echo "Nome :" .$nome;
echo "Salário :". $salario;
echo "Reajuste :".$novoSal;



?>