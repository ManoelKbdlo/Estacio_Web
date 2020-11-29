<?php

$livro = $_GET['livro'];
$tipo = $_GET['tipo'];

if ($tipo == "p" || $tipo == "P"  ) {
    echo "Caro professor(a) o Senhor(a) tem 10 dias para entrega o livro :" .$livro;

}
elseif ($tipo == "a" || $tipo == "a"  ) {
    echo "Caro aluno(a) o Senhor(a) tem 3 dias para entrega o livro :" .$livro;

}
else {
    echo "Tipo de usuário informado é invalido!";

}


?>