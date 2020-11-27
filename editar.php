<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM articulos WHERE NoSerie = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Articulo</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar Articulo:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td>Precio: </td>
					<td><input type="text" name="txt2Paterno" value="<?php echo $persona->Precio; ?>"></td>
				</tr>
				<tr>
					<td>Material: </td>
					<td><input type="text" name="txt2Materno" value="<?php echo $persona->Material; ?>"></td>
				</tr>
				<tr>
					<td>Tipo de Mueble: </td>
					<td><input type="text" name="txt2Nombre" value="<?php echo $persona->TipoMueble; ?>"></td>
				</tr>
				<tr>
					<td>Marca: </td>
					<td><input type="text" name="txt2Parcial" value="<?php echo $persona->Marca; ?>"></td>
				</tr>
				<tr>
					<td>Color: </td>
					<td><input type="text" name="txt2Final" value="<?php echo $persona->Color; ?>"></td>
				</tr>
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona->NoSerie; ?>">
					<td colspan="2"><input type="submit" value="EDITAR ARTICULO"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>