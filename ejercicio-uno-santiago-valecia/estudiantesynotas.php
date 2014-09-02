<<!DOCTYPE html>
<html>
	<head>
		<title>Resultado de Estudiantes</title>
	</head>
	<body>
		<h1>Resultado de Estudiantes</h1>
		<?php
		 include_once("includes/database.php");
		 $sql= "SELECT clasewebuno.estudiantes.nombre AS nombre,  clasewebuno.estudiantes.apellido AS apellido, clasewebuno.estudiantes.codigo AS codigo  FROM clasewebuno.estudiantesynotas JOIN clasewebuno.estudiantes ON clasewebuno.estudiantesynotas.codigo=clasewebuno.estudiantes.codigo GROUP BY estudiantes.nombre";
		 $result = mysqli_query($con,$sql);

		 if($result == false){
				echo "<h4>Error: ".mysqli_error($con)."</h4>";
			} else {
				if(mysqli_num_rows($result) < 1){
					echo "<p>No current databases</p>";
				} else{
					echo"<table border='2' style='width:300px'>";
					echo"<th>Nombre</th>";
					$sqlselectnotas="SELECT * FROM clasewebuno.notas";
					$nombrenotas= mysqli_query($con,$sqlselectnotas);

					while($nombreconnota = mysqli_fetch_array($nombrenotas)){
						echo"<th>".$nombreconnota["nombre"]."</th>";
					}
					
					while($row = mysqli_fetch_array($result)) {
						echo"<tr>";
						echo"<td>"."<a href='includes/displaynota.php?codigo=".$row["codigo"]."'>".$row["nombre"]."  ".$row["apellido"]."</a> "."</td>";
						$sql= "SELECT clasewebuno.estudiantes.codigo AS codigo, clasewebuno.estudiantesynotas.valornota AS valornota FROM clasewebuno.estudiantesynotas JOIN clasewebuno.estudiantes ON clasewebuno.estudiantesynotas.codigo=clasewebuno.estudiantes.codigo JOIN clasewebuno.notas ON clasewebuno.estudiantesynotas.idnota=clasewebuno.notas.idnota ";
						$notas= mysqli_query($con,$sql);
						while($datosnotas = mysqli_fetch_array($notas)){
							if($row["codigo"]==$datosnotas["codigo"]){
								echo"<td>".$datosnotas["valornota"]."</td>";
							}
						}
						echo"</tr>";
					}
					echo"</table>";
				}
			}
		 ?>
	</body>
</html>














<?php
/*
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
	echo "</table></body></html>";
	*/
?>