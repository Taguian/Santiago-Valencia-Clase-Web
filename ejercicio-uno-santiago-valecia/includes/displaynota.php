<html>
	<head>
	</head>
	<body>
		<?php
		/*todo esto lo saque de lo visto en clase, con una foto tomada al codigo realizado, y con ayuda de la pagina http://www.w3schools.com/*/
			include_once("database.php");
			if(isset($_GET["codigo"])){
				$codigo = $_GET["codigo"];

				$sql= " SELECT clasewebuno.estudiantes.nombre AS nombre,  clasewebuno.estudiantes.apellido AS apellido, clasewebuno.estudiantes.codigo AS codigo  FROM clasewebuno.estudiantesynotas JOIN clasewebuno.estudiantes ON clasewebuno.estudiantesynotas.codigo=clasewebuno.estudiantes.codigo WHERE clasewebuno.estudiantes.codigo='$codigo' GROUP BY clasewebuno.estudiantes.nombre";
				$result = mysqli_query($con,$sql);

				if(mysqli_num_rows($result) < 1){
					echo "<h1>Error, el estudiante no existe, o no tiene notas registradas</h1>";
				}
				else{
					echo"<table border='2' style='width:300px'>";
					echo"<th>Codigo</th>";
					echo"<th>Nombre</th>";
					$sqlnotas="SELECT * FROM clasewebuno.notas"; 

					$nombreNotas= mysqli_query($con,$sqlnotas);
					while($notasnombre = mysqli_fetch_array($nombreNotas)){
						echo"<th>".$notasnombre["nombre"]."</th>";
					}

					while($row = mysqli_fetch_array($result)) {
						echo"<tr>";
						echo"<td>".$codigo."</td>";
						echo"<td>".$row["nombre"]." ".$row["apellido"]."</td>";


						$sqlnotasdos= "SELECT clasewebuno.estudiantes.codigo AS codigo, clasewebuno.estudiantesynotas.valornota AS valornota FROM clasewebuno.estudiantesynotas JOIN clasewebuno.estudiantes ON clasewebuno.estudiantesynotas.codigo=clasewebuno.estudiantes.codigo JOIN clasewebuno.notas ON estudiantesynotas.idnota=clasewebuno.notas.idnota ";
						$notas= mysqli_query($con,$sqlnotasdos);
						while($datosNotas = mysqli_fetch_array($notas)){
							if($row["codigo"]==$datosNotas["codigo"]){
								echo"<td>".$datosNotas["valornota"]."</td>";
							}
						}
						echo"</tr>";
					}
				}
				echo"</table>";
			}
		?>
	</body>
</html>