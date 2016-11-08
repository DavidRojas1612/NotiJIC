<?php 
	//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['enviar'])){
	//Guardamos en variables los datos enviados
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];
	
	///Validamos del lado del servidor que el nombre y el email no estén vacios
	if($nombre == ''){
		echo "Debe ingresar su nombre";
	}
	else if($email == ''){
		echo "Debe ingresar su email";
	}else{
		$para = "sebgv524@gmail.com";//Email al que se enviará
		$asunto = "Contacto";//Asunto del correo
		//Este sería el cuerpo del mensaje
		$contenido = "Nombre: " . $nombre. "\nCorreo: ". $correo . "\nTeléfono: " . $telefono ."\nMensaje: " . $mensaje;	
		
		//Cabeceras del correo
	    $headers = "From: $nombre <$email>\r\n"; //Quien envia?
	    $headers .= "X-Mailer: PHP7\n";
		
		//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
		if(mail($para, $asunto, $mensaje)){
			echo "Su mensaje se ha enviado correctamente";
			echo "<br />";
			echo '<a href="../contacto.html">Volver</a>';
		}else{
			echo "Hubo un error en el envío inténtelo más tarde";
		}
	}
}	
?>