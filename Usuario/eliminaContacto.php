<?php
	$contacto = new mysqli("localhost", "root", "", "agenda");
	if(mysqli_connect_errno())
	{
		echo 'Conexión fallida:', mysqli_connect_errno();
		exit();
	}
	$id=$_GET['id'];
	$resultado = $contacto->query("DELETE FROM contactos WHERE id= '".$id."'");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda de contactos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/plugins/morris.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/sb-admin.css">
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html">Agenda de Contactos</a>
			</div>
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><b class="caret"></b></a>
					<ul class="dropdown-menu message-dropdown"></ul>
				</li>
			</ul>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-home"></i>  Inicio</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-user"></i>  Contactos </a>
                    </li>
                    <li>
                        <a href="correo.html"><i class="glyphicon glyphicon-envelope"></i>  Correo</a>
                    </li>
                </ul>
            </div>
		</nav>
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							LISTA DE CONTACTOS
						</h1>
						<ol class="breadcrumb">
							<li class="active">
								<i class="fa fa-user"></i>
								Contactos
							</li>
						</ol>
					</div>
				</div>
				<div id="show1"></div>
				<div id="tabla">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script type="text/javascript">
						$(document).ready(function()
						{
							setInterval(function()
							{
								$('#show1').load('conexion.php')
							}, 1000);
						});
					</script>
					<p>
						<a href="registroContacto.html" class="btn btn-primary btn-lg">Agregar contacto</a>
					</p>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>