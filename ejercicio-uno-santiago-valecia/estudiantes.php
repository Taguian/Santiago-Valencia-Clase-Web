
<html>
	<head>
		<title>Estudiantes</title>
	</head>
	<body>
		<?php
			include_once("includes/database.php");

			$query = "SELECT * FROM clasewebuno.estudiantes";
			$result = mysqli_query($con, $query);

			while($row = mysqli_fetch_array($result)) {
				echo $row['codigo']." ".$row['nombre']." ".$row['apellido']." ".$row['correo'];
				echo "<br />";
			}

		?>

		<h1>Matricular un nuevo estudiante</h1>
		<section>
			<form action="includes/matricula.php" method="POST">
			    <label>Codigo</label><input type="text" name="codigo"><br />
			    <label>Nombre</label><input type="text" name="nombre"><br />
			    <label>Apellido</label><input type="text" name="apellido"><br />
			    <label>Correo</label><input type="text" name="correo"><br />
			    <input type="submit" value="Enviar">
			    /*Matricula pero no refresca la pagina :/*/
  			</form>
		</section>>
	</body>
</html>>
