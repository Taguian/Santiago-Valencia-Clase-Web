<?php
	include("connect.php");
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['usuario']) && !empty($_POST['usuario']) &&
	isset($_POST['password']) && !empty($_POST['password']) &&
	isset($_POST['passworddos']) && !empty($_POST['passworddos']) &&
	isset($_POST['email']) && !empty($_POST['email']) && 
	$_POST['password'] == $_POST['passworddos'])
	{
		$registrar="INSERT INTO talleruno.usuarios (`nombre`, `usuario`, `password`, `email`) VALUES ('','$_POST[nombre]','$_POST[usuario]','$_POST[password]','$_POST[email]')";
		$comunicacion = mysqli_query($con,$registrar);
		echo "Datos insertados <br>";
		echo "Nombre: ".$_POST['nombre']."<br>";
		echo "Usuario: ".$_POST['usuario']."<br>";
		echo "password: ".$_POST['password']."<br>";
		echo "e-mail: ".$_POST['email']."<br>";
	}else{

		echo "Verificar que cada campo haya sido llenado correctamente";

	}
?>