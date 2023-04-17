<?php
include_once('../config/config.php');
include('Paciente.php');

if (isset($_POST) && !empty($_POST)) {
    $p = new Paciente();
    if($_FILES['imagen']['name']!==''){
        $_POST['imagen'] = saveImage($_FILES);
    }

    $save = $p->save($_POST);
    if($save) {
        $mensaje = '<div class="alert alert-success">Sesion registrada.</div>';
    }else{
        $mensaje = '<div class="alert alert-danger">Error al registro.</div>';
} 
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        if(isset($mensaje)) {
            echo $mensaje;}
            ?>
        
        <h2 class="text-center mb-2"> Registrar sesion</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
    <input type="text" name="nombres" id="nombres" placeholder="Nombres del paciente"class="form-control" />
            </div>
            <div class="col">
    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del paciente"class="form-control" />
            </div>
            </div>
            <div class="row mb-2">
                <div class="col">
    <input type="email" name="email" id="email" placeholder="email del paciente"class="form-control" />
            </div>
            <div class="col">
    <input type="number" name="celular" id="celular" placeholder="Celular del paciente"class="form-control" />
            </div>
            </div>
            <div class="row mb-2">
                <div class="col">
    <textarea name="enfermedades" id="enfermedades" placeholder="Enfermedades del paciente" class="form-control">    </textarea>        
            </div>
            <div class="col">
    <input type="text" name="duracionSesion" id="duracionSesion" placeholder="duracion de la Sesion"class="form-control" />
            </div>
            </div>
            <div class="row  mb-2">
                <div class="col">
                    <input type="datetime-local" name="fecha" id="fecha" class="form-control">

            </div>
            <div class="col">
    <input type="file" name="imagen" id="imagen" class="form-control" />
            </div>
            </div>
            <button class="btn btn-success">Registrate </button>    
        </form>
    </div>
    
</body>
</html>