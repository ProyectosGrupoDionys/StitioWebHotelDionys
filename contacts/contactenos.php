<?php
	$destino= "soporteti2@grupodionys.com.pe";
	$nombre=$_POST["userName"];
	$email=$_POST["userEmail"];
 	$mensaje=$_POST["userMsg"];

	$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nMensaje: " . $mensaje ;
	mail($destino, "Consultas(Pagina Web Hostal)", $contenido);
	header("Location:index.html");
 ?>
