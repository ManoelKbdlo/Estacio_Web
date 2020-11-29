<?php

$nome = $_GET['nome'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$media = ($nota1+$nota2)/2;

echo "sua média é : ".$media;

if ($media >7 && $media <=10) {
    echo " Você foi aprovado!";
}
elseif ($media >=3 && $media < 7){
    echo " Você vai fazer novo exame!";
}
elseif ($media < 3){
    echo " você foi Reprovado!";
}
else {
    echo " tem algo errado nas notas informadas!";

}


?>