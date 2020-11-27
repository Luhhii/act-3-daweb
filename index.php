<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'conexion.php';
		$sentencia = $bd->query("SELECT * FROM articulos;");
		$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}


	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de Articulos</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>
		<a href="cerrar.php">Cerrar Sesión</a>
		<h3>Lista de Articulos</h3>
		<table>
			<tr>
				<td>NoSerie</td>
				<td>Precio</td>
				<td>Material</td>
				<td>Tipo de mueble</td>
				<td>Marca</td>
				<td>Color</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 
				foreach ($alumnos as $dato) {
					?>
					<tr>
						<td><?php echo $dato->NoSerie; ?></td>
						<td><?php echo $dato->Precio; ?></td>
						<td><?php echo $dato->Material; ?></td>
						<td><?php echo $dato->TipoMueble; ?></td>
						<td><?php echo $dato->Marca; ?></td>
						<td><?php echo $dato->Color; ?></td>
						<td><a href="editar.php?id=<?php echo $dato->NoSerie; ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->NoSerie; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3>Ingresar Articulos:</h3>
		<form method="POST" action="insertar.php">
			<table>
				<tr>
					<td>Precio: </td>
					<td><input type="text" name="txtPaterno"></td>
				</tr>
				<tr>
					<td>Material: </td>
					<td><input type="text" name="txtMaterno"></td>
				</tr>
				<tr>
					<td>Tipo de Mueble: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				<tr>
					<td>Marca: </td>
					<td><input type="text" name="txtParcial"></td>
				</tr>
				<tr>
					<td>Color: </td>
					<td><input type="text" name="txtFinal"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="INGRESAR ARTICULO"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>