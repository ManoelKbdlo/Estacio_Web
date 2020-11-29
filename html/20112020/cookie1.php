<html>
<head>
    <title>Cookies, pagina 2</title>
</head>
<body> <?php
if (isset($_COOKIE['nome']))
    echo "Seu nome é $_COOKIE[nome].";
else
    echo "Eu não sei seu nome. ";
?>
</body>
</html>