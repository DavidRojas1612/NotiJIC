<?php
	$u = $_POST['txtu'];
	$p = $_POST['txtc'];

	$config = parse_ini_file('../config.ini');
	$con =  mysqli_connect('mydbinstance.c765otpnmdfd.us-west-2.rds.amazonaws.com', $config['usuario'], $config['contra'], $config['db']);
  $q = "select 1 from usuario where nombre='$u' and password='$p'";
  $r = mysqli_query($con,$q);
	$num = mysqli_num_rows($r);
	if($num == 0){
		print ('Usuario no permitido <a href="../index.html">Regresar</a>');

	}else{
		mysqli_free_result($r);
		mysqli_close($con);
<<<<<<< HEAD
		header("location:../contacto.html");
=======
		header("location:sesion.html");
>>>>>>> test
	}
?>