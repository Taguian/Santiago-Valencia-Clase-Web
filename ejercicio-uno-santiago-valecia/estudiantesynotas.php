<?php
	include_once("includes/database.php");

	$query = "SELECT clasewebuno.estudiantes.nombre AS nombreestudiante, clasewebuno.estudiantes.codigo AS codigoestudiante, clasewebuno.notas.nombre AS nombrenota, clasewebuno.estudiantesynotas.valornota FROM clasewebuno.estudiantes JOIN clasewebuno.estudiantesynotas ON clasewebuno.estudiantes.codigo = clasewebuno.estudiantesynotas.codigo JOIN clasewebuno.notas ON clasewebuno.notas.idnota = clasewebuno.estudiantesynotas.idnota";
	$result = mysqli_query($con, $query);

	echo "<html><body><table style='width:300px'>";
		while($row = mysqli_fetch_array($result)) {	
		echo "<tr>";						
				echo "<td>";
				echo $row['codigoestudiante'];
				echo "</td>";
				echo "<td>";
				echo $row['nombreestudiante'];
				echo "</td>";
				echo "<td>";
				echo $row['nombrenota'];
				echo "</td>";
				echo "<td>";
				echo $row['valornota'];
				echo "</td>";					
		echo "</tr>";
		}
		/*
		$result = mysqli_query($con, $query);
		echo "<tr>";
			while($row = mysqli_fetch_array($result)) {
				echo "<td>";
				echo $row['nombreestudiante'];
				echo "</td>";
			}
		echo "</tr>";
		$result = mysqli_query($con, $query);
		echo "<tr>";
			while($row = mysqli_fetch_array($result)) {
				echo "<td>";
				echo $row['nombrenota'];
				echo "</td>";
			}
		echo "</tr>";
		$result = mysqli_query($con, $query);
		echo "<tr>";
			while($row = mysqli_fetch_array($result)) {
				echo "<td>";
				echo $row['valornota'];
				echo "</td>";
			}
		echo "</tr>";
		*/
	echo "</table></body></html>";
?>