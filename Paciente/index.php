<?php
include_once('../config/config.php');
include('Paciente.php');

$p = new Paciente();
$data = $p->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de sesiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-2">Calendario</h2>
        <div class="row">
            <?php
            while( $pt = mysqli_fetch_object($data)){
                $date = $pt->fecha;
                echo "<div class='col'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5> <img src='".ROOT."/images/$pt->imagen' width='50' height='50'/> $pt->nombres $pt->apellidos </h5>";
                echo "<p> <b>Fecha: </b> ". date('D', strtotime($date))."".date('M-Y H:i', strtotime($date))."</p>";
                echo "<div class='text-center'>";
                echo "<a class='btn btn-success' href='#' > Modificar</a> - <a class='btn btn-danger' href='#'> Eliminar</a>" ;
                echo "</div>";
                echo "</div>";
                echo "</div>";


            }
            ?>
    </div>
    </div>
</body>
</html>