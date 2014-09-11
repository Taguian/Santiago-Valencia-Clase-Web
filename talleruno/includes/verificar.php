<?php 
	$user =$_POST["usuario"];
    $password =$_POST["password"];
    include_once("connect.php");

    $validar="SELECT * FROM talleruno.usuarios WHERE talleruno.usuarios.usuario='$user' AND talleruno.usuarios.password='$password'";
    $enviar = mysqli_query($con,$validar);


    /*En esta parte me ayudo un compañero de clase, igual que en el primer ejercicio no recordaba como pasar de una pagina a otra*/
    if(mysqli_num_rows($enviar) < 1)
    {
    	echo "Infromacion incorrecta";
    	echo"<meta http-equiv='refresh' content='6;url=/talleruno/index.php'>";//no funciona, ni idea por que.
    }

    else{
        echo"<meta http-equiv='refresh' content='0.5;url=/claseweb/Santiago-Valencia-Clase-Web/talleruno/perfil.php?usuario=".$user."'>";
    }



/*Igual aqui, queria usar un titurial de como hacer una sesion, pero tampoco funciono, depronto seria bueno mirarlo en clase para ver que estaba pasando

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
	*/
 ?>
