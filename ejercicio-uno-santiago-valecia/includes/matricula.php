<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
	<?php
		$codigo =$_POST["codigo"];
	    $nombre =$_POST["nombre"];
	    $apellido =$_POST["apellido"];
	    $correo =$_POST["correo"];
	    include_once("database.php");
	    $registrar="INSERT INTO clasewebuno.estudiantes(`codigo`, `nombre`, `apellido`, `correo`) VALUES ('$codigo','$nombre','$apellido','$correo')";

	    $comunicacion= mysqli_query($con,$registrar);
	?>
	</body>
</html>>
