<!DOCTYPE html>
<html>
<head>
	<title>Perfil del usuario</title>
	<meta charset="UTF-8">
</head>
<body>	
	<?php
	include_once("includes/connect.php");
	if(isset($_GET["usuario"])){
		$user = $_GET["usuario"];

		$sql= "SELECT talleruno.usuarios.nombre AS nombre, talleruno.usuarios.usuario AS usuario FROM talleruno.usuarios WHERE talleruno.usuarios.usuario='$user'";
		$result = mysqli_query($con,$sql);

		if(mysqli_num_rows($result) < 1)
		{
			echo "<h1>Error en el query</h1>";
		}
		else{
			while($row = mysqli_fetch_array($result)) {	
				echo "<h1>".$user."</h1>";	
				echo"<h2>Nombre:".$row["nombre"]."</h2>";
				echo"<h2>Tareas Asignadas</h2>";
				$querytareas= "SELECT talleruno.usuarios.usuario AS usuario, talleruno.tareas.fechainicio AS fechainicio, talleruno.tareas.fechafin AS fechafin, talleruno.tareas.descripcion AS descripcion, talleruno.tareas.prioridad AS prioridad FROM talleruno.tareas JOIN talleruno.usuarios ON talleruno.tareas.usuario=talleruno.usuarios.usuario";
				$tareasasignadas= mysqli_query($con,$querytareas);
				/*La organizacion para mostrar los resultados de esta forma me la enseño un compañero del semestre pasado*/
				echo"<table border='1' style='width:300px'>";
				echo"<th>Descripción</th>";
				echo"<th>Prioridad</th>";
				echo"<th>Fecha de creación</th>";
				echo"<th>Fecha de finalización</th>";
				echo"<tr>";
				while($tareas = mysqli_fetch_array($tareasasignadas)){
					if($user==$tareas["usuario"]){
						echo"<td>".$tareas["descripcion"]."</td>";
						echo"<td>".$tareas["prioridad"]."</td>";
						echo"<td>".$tareas["fechainicio"]."</td>";
						echo"<td>".$tareas["fechafin"]."</td>";

					}
				echo"</tr>";
				}

			}
			echo"</table>";
		}
	}
	/*
	echo "<form action="index.php">";
	echo "<input type="submit" value="Salir">";	
	echo "</form>";
	*/


	//A continuacion codigo html encargado de mostrarme los usuarios registrados para irme a ver las tareasque tienen
	//y un codigo para asignarle tareas a otro usuario
	?>
	<form action="includes/asignar.php" method="post">
		<h3>Asigna una tarea a un usuario</h3>
		<table width="200" border="0">
			<tr>
				<td>Titulo:</td>
				<td><input type="text" name="nombre" /></td>
			</tr>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="usuario" /></td>
			</tr>
			<tr>
				<td>Descripción</td>
				<td><input type="text" name="descripcion" /></td>
			</tr>
			<tr>
				<td>Prioridad</td>
				<td><input type="text" name="prioridad" /></td>
			</tr>
			<tr>
				<td>Fecha de Inicio:</td>
				<td><input type="text" name="fechainicio" /></td>
			</tr>
			<tr>
				<td>Fecha de Finalizacion:</td>
				<td><input type="text" name="fechafin" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Confirmar" /></td>
			</tr>
		</table>	
	</form>
	<form action="index.php">
		<input type="submit" value="Log out">
	</form>
	<?php 
		echo "<h3>Usuarios registrados</h3>";
		$sqlusuarios= "SELECT `usuario` FROM talleruno.usuarios";
		$resultusuarios = mysqli_query($con,$sqlusuarios);
		while($row = mysqli_fetch_array($resultusuarios)) {
			echo "<a href="."/claseweb/Santiago-Valencia-Clase-Web/talleruno/perfil.php?usuario=".$row["usuario"]."><h4>".$row["usuario"]."</h4>";
		}		
	 ?>
</body>
</html>