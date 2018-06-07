<?php
	$conn = new mysqli("localhost", "root", "", "agenda");
	if(mysqli_connect_errno())
	{
		echo 'Conexión fallida: ', mysqli_connect_errno();
		exit();
	}

	$sql = "SELECT * FROM contactos ORDER BY id";
	$result = mysqli_query($conn, $sql);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Contactos</title>
</head>
<body>
	<table class="table" style=border-radius:33px; align:center>
		<thead>
			<tr style="border-radius:33px">
				<th style="background:#222222; color:white;">Nombre</th>
				<th style="background:#222222; color:white;">Apellidos</th>
				<th style="background:#222222; color:white;">Empresa</th>
				<th style="background:#222222; color:white;">Teléfono</th>
				<th style="background:#222222; color:white;">Correo</th>
				<th style="background:#222222; color:white;">-</th>
				<th style="background:#222222; color:white;">-</th>
			</tr>
			<tbody>
				<?php while($row=mysqli_fetch_array($result)) {?>
					<tr>
						<td>
							<?php echo $row['nombre']; ?>
						</td>
						<td>
							<?php echo $row['apellido']; ?>
						</td>
						<td>
							<?php echo $row['empresa']; ?>
						</td>
						<td>
							<?php echo $row['telefono']; ?>
						</td>
						<td>
							<?php echo $row['correo']; ?>
						</td>
						<td>
							<a href="editaContacto.php?id=<?=$row['id'];?>">Editar</a>
						</td>
						<td>
							<a href="eliminaContacto.php?id=<?=$row['id'];?>">Eliminar</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</thead>
	</table>
</body>
</html>