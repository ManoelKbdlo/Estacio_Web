<?php

$idade = $_GET['idade'];

if ($idade >= 18){
     header ("Location:https://cabedelo.pb.gov.br/");
}
else {
    header ("Location:https://uol.com.br/");
}

?>
