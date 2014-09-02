<?php
	include_once("includes/database.php");


	$query = "SELECT * FROM clasewebuno.estudiantes";
	$result = mysqli_query($con, $query);

	while($row = mysqli_fetch_array($result)) {
		echo $row['codigo']." ".$row['nombre']." ".$row['apellido']." ".$row['correo'];
		echo "<br />";
	}
?>