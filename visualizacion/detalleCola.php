<?php 
function conexion(){
    return new mysqli("localhost", "root", "root", "cola");
}
$conn2=conexion(); 
$titulo=null;
$logo=null;
$descripcion=null;
$footer=null;
if ($conn2->connect_error) { 
    die("Fallo en la conexión: " . $conn2->connect_error); 
} else{ 
    $sql2="SELECT * FROM indexpersonalizado"; 
    $result2 = $conn2->query($sql2); 
    while($row = $result2->fetch_assoc()) {
        $titulo=$row["titulo"]; 
        $logo=$row["logo"];
        $descripcion=$row["descripcion"];
        $footer=$row["footer"];
    }
}

?>
<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <meta content="text/html; charset=UTF-8">
        <title>Gestión de colas</title>
        <link rel="stylesheet" href="/gestion-De-Colas/visualizacion/css/bootstrap.min.css">
        <script src="/gestion-De-Colas/visualizacion/js/jquery.min.js"></script>
        <script src="/gestion-De-Colas/visualizacion/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/gestion-De-Colas/visualizacion/css/starter-template.css">
        <link href="/gestion-De-Colas/visualizacion/css/switch.css" rel="stylesheet">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/gestion-De-Colas/visualizacion/css/style.css">
        <link id="tema" rel="stylesheet" href="/gestion-De-Colas/visualizacion/css/view-azul.css">
    </head>
    <body cz-shortcut-listen="true">
        <nav id="color-nav" class="navbar navbar-fixed-top navbar-dark bg-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="/gestion-De-Colas/visualizacion/index.php" class="navbar-brand"><?php echo $titulo; ?></a>
                    <a class="navbar-brand" href="/gestion-De-Colas/gestion/login.php">Iniciar sesión</a>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-6" style="padding:2%">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6" style="padding:5px 10px;">
                                <h3 class="panel-title">Detalles cola</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row padding-detalle-cola">
                        <div class="col-md-12">
                            <h2>Nombre</h2>
                        </div>
                    </div>
                    <div class="row padding-detalle-cola">
                        <div class="col-md-6">
                            <h5>Estado</h5>
                        </div>
                        <div class="col-md-6">
                            <h5><span class='label label-success'>En proceso</span></h5>
                        </div>
                    </div>
                    <div class="row padding-detalle-cola">
                        <div class="col-md-6">
                            <h5>Fecha Inicio</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>02-03-2015</h5>
                        </div>
                    </div>
                    <div class="row padding-detalle-cola">
                        <div class="col-md-6">
                            <h5>Fecha Fin</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>02-03-2015</h5>
                        </div>
                    </div>
                    <div class="row padding-detalle-cola-sin-borde">
                        <div class="col-md-6">
                            <h5>Moderador</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>Daniel Salas Villaldea</h5>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>boton para asignarse, camabiar icono
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding:2%">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6" style="padding:5px 10px;">
                                <h3 class="panel-title">Usuarios en la cola</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="titulo-contenido-detalle-cola text-center">
                        <div class="col-md-6">
                            <label>Código</label>
                        </div>
                        <div class="col-md-6">
                            <label>Posición</label>
                        </div>
                    </div>
                    <div class="contenido-detalle-cola text-center">
                        <div class="col-md-6">
                            <label for="">#87PQ</label>
                        </div>
                        <div class="col-md-6">
                            <label>03</label>
                        </div>
                    </div>
                    <div class="contenido-detalle-cola text-center">
                        <div class="col-md-6">
                            <label>#87PQ</label>
                        </div>
                        <div class="col-md-6">
                            <label>02</label>
                        </div>
                    </div>
                    <div class="contenido-detalle-cola text-center">
                        <div class="col-md-6">
                            <label>#87PQ</label>
                        </div>
                        <div class="col-md-6">
                            <label>01</label>
                        </div>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-md-12 text-center" style="padding-top:1%">
                    <p><?php echo $footer; ?></p>
                    <p><?php echo $descripcion; ?></p>
                </div>
            </div>
        </div>
    </body>
    </html>