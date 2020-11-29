<?php
session_start();
?>
<html>
<head>
    <title>Cookies, pagina 1</title>
</head>
<body> <?php
if (!isset($_SESSION['visitas']))
    $_SESSION['visita'] = 0;
?>
 Esta é sua visita número
 <?php
 echo $_SESSION['visitas']++;
 ?>.

 <?php echo session_id();

  session_regenerate_id();
  echo md5 ("manoel"); 
  echo md5 ("manoel mendes");

?>
</body>
</html>