<?php
include_once('../config/config.php');
include('../config/Database.php');

class Paciente{

    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();        
    }

    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params ['celular'];
        $enfermedades = $params['enfermedades'];
        $duracionSesion = $params['duracionSesion'];
        $imagen = $params['imagen'];
        $fecha = $params['fecha'];
    

        $insert = " INSERT INTO pacientes VALUES (NULL,'$nombres', '$apellidos', '$email', '$celular', '$enfermedades', '$duracionSesion','$imagen','$fecha')";

        return mysqli_query($this->conexion, $insert);
    }

    function getAll(){
        $sql = "SELECT  * FROM pacientes";
        return mysqli_query($this->conexion,$sql);
    }

    function getOne($id){
        $sql = "SELECT  * FROM pacientes WHERE id='$id'";
        return mysqli_query($this->conexion,$sql);
    
    }
}
?>