<?php
    include_once('../class/zoologico.class.php');
    include_once('../class/atracciones.class.php');
    $accion = $_SERVER['REQUEST_METHOD'];
    $datos = array();
    switch($accion){
        case 'POST':
            $datos = file_get_contents("php://input");

            $datos = json_decode($datos, true);

            if(isset($_GET['id_atraccion'])){
                $id = $_GET['id_atraccion'];
                foreach($datos as $atraccion){
                    $atracciones = $Atracciones->update($id,$atraccion,true);
                    $status=200;
                    $msj="se ha actualizado con exito";
                }
            }else{
                foreach($datos as $atraccion){
                    $atracciones = $Atracciones->create($atraccion, true);
                    $status = 200;
                    $msj = "Se ha dado de alta una nueva atracción";
                }
            }
            break;
        case 'DELETE':
            if (isset($_GET['id_atraccion'])){
                $id_atraccion = $_GET['id_atraccion'];
                $cantidad= $Atracciones->delete($id_atraccion);
                $status=200;
                $msj= "se han eliminado: ".$cantidad." con exito" ;
            }else{
                $status= 404;
                $msj ="No se ah encontrado el recurso";
            }
            break;
        case 'GET':
        default:
            $datos= null;
            if (isset($_GET['id_atraccion'])){
                $id_atraccion = $_GET['id_atraccion'];
                $datos= $Atracciones->readOne($id_atraccion);
            }else{
                $datos=$Atracciones->read();
            }
            $status = 200;
            $mensaje = "Se an procesado con exito las acciones";
    }
    $zoologico->json($datos, $status, $mensaje);
?>