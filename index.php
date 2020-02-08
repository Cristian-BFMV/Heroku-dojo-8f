<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php
echo '¡Hola ' . htmlspecialchars($_GET["nombre"]) . '!';
?>
 </body>
</html>
