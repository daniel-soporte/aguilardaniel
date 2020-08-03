<?php
   $destino= "danielsupport@contacto.com";
   $nombre = $_POST["nombre"];
   $correo = $_POST["correo"];
   $telefono = $_POST["telefono"];
   $mensaje = $_POST["Escribe detalladamente cual es el problema o Sugerencia."];
   $contenido = "nombre: " . $nombre . "\ncorreo" . $correo . "\ntelefono:" . $telefono . "\nmensaje:" . $mensaje;
   mail($destino,"Contacto", $contenido);
   header("Location:gracias.html");
?>