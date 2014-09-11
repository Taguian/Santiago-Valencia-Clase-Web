<!DOCTYPE html>
<html>
	<head>
		<title>Taller 1</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="includes/verificar.php" method="post">
			<h1>LOG IN</h1>
			<input type="text" name="usuario" /><br><br/>
			<input type="password" name="password" /><br><br/>
			<input type="submit" value="Ingresar" />
		</form>
		<form action="includes/registrar.php" method="post">
			<h1>REGISTRO</h1>
			<table width="200" border="0">
				<tr>
					<td>Nombre:</td>
					<td><input type="text" name="nombre" /></td>
				</tr>
				<tr>
					<td>Usuario:</td>
					<td><input type="text" name="usuario" /></td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type="text" name="password" /></td>
				</tr>
				<tr>
					<td>Confirmar contraseña</td>
					<td><input type="text" name="passworddos" /></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td><input type="text" name="email" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Registrar" /></td>
				</tr>
			</table>	
		</form>
	</body>
</html>