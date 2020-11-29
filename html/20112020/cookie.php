<?php
$b = setcookie('nome',
               'Fabrica de Software');
?>
<html>
<head>
    <title>Cookies, pagina 1</title>
</head>
<body> <?php
if ($b)
    echo "Cookie enviado com sucesso.";
else
    echo "erro ao enviar cookie. ";
?>
</body>
</html>