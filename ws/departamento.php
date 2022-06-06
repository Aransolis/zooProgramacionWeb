<?php
// header('Content-Type: application/json; charset=utf-8');
// require_once('../class/zoologico.class.php');
// require_once('../class/atracciones.class.php');
// $atracciones = $Atracciones->read();
// $isAtracciones = json_encode($atracciones);
// echo $isAtracciones;
// die();
    $departamento = file_get_contents("php://input"); 
    $departamento = json_decode($departamento);
    print_r($departamento);
    echo $departamento->director;
    echo sizeof($departamento->empleados);
    foreach($empleados as $empleado){
        echo $empledo->apellido;
    }
?>