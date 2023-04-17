<?php

include('config/config.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT ?>/Paciente/index.php">Ver Calendario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>/Paciente/add.php">Registrar sesion</a>
                
            </li>

        </ul>
    </nav>
    <div class="container">
        <h1 class="text-center">Calendario</h1>
    </div>
</body>
</html>