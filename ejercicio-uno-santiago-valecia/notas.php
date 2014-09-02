<?php
	include_once("includes/database.php");


	$query = "SELECT * FROM clasewebuno.notas";
	$result = mysqli_query($con, $query);

	while($row = mysqli_fetch_array($result)) {
		echo $row['idnota']." ".$row['nombre']." ".$row['porcentaje'];
		echo "<br />";
	}
?>