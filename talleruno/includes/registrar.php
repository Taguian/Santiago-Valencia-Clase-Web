<?php
 	$nombre =$_POST["nombre"];
 	$user =$_POST["usuario"];
    $password =$_POST["password"];
    $passworddos=$_POST["passworddos"];
    $email =$_POST["email"];
    include_once("connect.php");

    if($password==$passworddos){//Si ambas contrasenas insertadas coinciden...paso a realizar el registro

        $registrar="INSERT INTO talleruno.usuarios(`nombre`, `usuario`, `password`, `email`) VALUES ('$nombre','$user','$password','$email')";
        $comunicacion= mysqli_query($con,$registrar);
        echo "Ususario registrado satisfactoriamente";
    }else{
        echo"<h2>Error en el registro, revise que ambas contraseñas coincidan</h2>";
    }
    if($comunicacion == false)
    {
    	echo "Error en la comunicacion";
      	echo "Error: ".mysqli_error($con)."";
  } 


/*
trare de seguir un tutorial en linea a ver si era mejor, pero finalmente no sirvio.
mejor voy a hacer el registro como lo hice en el primer trabajo.La idea era que no me dejara registrar si los campos estaban vacios
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
	*/
?>