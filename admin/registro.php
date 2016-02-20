<!doctype html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Facultad de Odontologia</title>

</head>

<body>

	<form action="" method="POST">

		<fieldset>

			<legend>Registro</legend>

			<table>

				<tr>

					<td><label for="name">Nombre:</label></td>

					<td><input type="text" name="name" id="name" placeholder="Nombre"></td>

				</tr>

				<tr>

					<td><label for="paterno">Apellido Paterno:</label></td>

					<td><input type="text" name="paterno" id="paterno" placeholder="Apellido Paterno"></td>

				</tr>

				<tr>

					<td><label for="email">Correo:</label></td>

					<td><input type="text" name="email" id="email" placeholder="Correo"></td>

				</tr>

				<tr>

					<td><label for="password">Password:</label></td>

					<td><input type="password" name="password" id="password" placeholder="Password"></td>

				</tr>

				<tr>

					<td><label for="status">Estatus:</label></td>

					<td>

						<select name="status" id="status">

							<option value="">-- Selecciona --</option>

							<option value="1">Activo</option>

							<option value="2">Inactivo</option>

						</select>

					</td>

				</tr>

				<tr>

					<td><label for="rol">Rol:</label></td>

					<td>

						<select name="rol" id="rol">

							<option value="">-- Selecciona --</option>

							<option value="1">Administrador</option>

							<option value="2">Maestro</option>

							<option value="3">Alumno</option>

						</select>

					</td>

				</tr>

				<tr>

					<td colspan="2"><input type="submit" value="Aceptar"></td>

				</tr>

			</table>

		</fieldset>

	</form>

	<?php 

		include("conex.php");



		if (isset($_POST['name']) && isset($_POST['email'])) {

			



			$save = mysql_query("INSERT INTO user (id_rol,email,password,status,nombre,paterno) VALUES (

				'".$_POST['rol']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['status']."','".$_POST['name']."','".$_POST['paterno']."')");





			if ($save) {

				echo "Se guardo Exitosamente";

			}

			else{

				echo "No Se guardo Exitosamente";

			}

		}

	?>

</body>

</html>