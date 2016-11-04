<?php
	$u = $_POST['txtu'];
	$p = $_POST['txtc'];
	$con =  mysqli_connect('mydbinstance.c765otpnmdfd.us-west-2.rds.amazonaws.com', 'sebas', '12345', 'notijicbd');
  $q = "select 1 from usuario where nombre='$u' and password='$p'";
  $r = mysqli_query($con,$q);
	$num = mysqli_num_rows($r);
	if($num == 0){
		print ('Usuario no permirido <a href="index.html">regresar</a>');

	}else{
		mysqli_free_result($r);
		mysqli_close($con);
		header("location:contacto.html");
	}
