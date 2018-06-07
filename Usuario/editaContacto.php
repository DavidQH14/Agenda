<?php
	$contacto = new mysqli("localhost", "root", "", "agenda");
	if(mysqli_connect_errno())
	{
    	echo'Conexion Fallida:',mysqli_connect_error();
    	exit();
	}
	$id = $_GET['id'];

	$resultado=$contacto->query("SELECT * FROM contactos where id='".$id."'");
	$a=mysqli_data_seek ($resultado, 0);
	$row= mysqli_fetch_array($resultado);
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
                            REGISTRO DE CONTACTO
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-user"></i>  <a href="contactos.html">Contactos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Registro
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <form name="modificaContacto" action="modificaContacto.php?id=<?=$id?>" method="post">

                            <div class="form-group col-lg-6">
                                <label >Nombre:</label>
                                <input type="text"  class="form-control" name ="nombre" placeholder="Nombre(s) de contacto" value="<?= $row['nombre'];?>" required >
                                <br>
                            
                                <label >Apellidos:</label>
                                <input class="form-control" type="text" name="apellidos" placeholder="Apellidos" required value="<?= $row['apellido'];?>">
                                <br>
                            
                                <label >Empresa:</label>
                                <input class="form-control" type="text" name="empresa" placeholder="Nombre de la empresa" required value="<?= $row['empresa'];?>">
                                <br>
                            
                                <label >Telefono:</label>
                                <input type="text" class="form-control" name="telefono" placeholder="Número telefónico" required value="<?= $row['telefono'];?>">
                                <br>

                                <label >Correo:</label>
                                <input type="email" class="form-control" name="correo" placeholder="ejemplo@something.com" required value="<?= $row['correo'];?>">
                                <br>
                                
                                <input type="submit" class="btn btn-success btn-lg" name="guardar" value="GUARDAR CAMBIOS"><a href="contactos.html">
                            </div>
                            <br>
                            </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>