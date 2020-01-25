<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <title>contacto</title>
</head>
<body>
 <body >

<form method="post">
   <input type="text" placeholder="name" name="" required>
   <input type="email" placeholder="email" name="" required >
   <input type="text" placeholder="asunto" name="">
   <textarea placeholder="mensaje" name="msg" required></textarea> 
   <input type="submit" name="enviar">

</form>
<?php
include("correo.php");

?>
</body>
</html>

  