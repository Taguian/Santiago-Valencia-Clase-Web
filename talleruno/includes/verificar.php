<?php 
	session_start();
	include("connect.php");
	if (isset($_POST['usuario']) && !empty($_POST['usuario']) &&
		isset($_POST['password']) && !empty($_POST['password']))
	 {
	 	$verificar="SELECT `usuario`, `password` FROM talleruno.usuarios WHERE usuario='$_POST[usuario]'";
		$sel=mysql_query($con,$verificar);	

		$sesion=mysql_fetch_array($sel);

		if ($_POST['password'] == $session['password']) {
			$_SESSION['username'] = $_POST['usuario'];
			echo "sesion existosa";
		}else{
			echo "No coinciden";	
		}
	}else{
		echo "Llenar ambos campos para poder hacer log in";
	}
 ?>
