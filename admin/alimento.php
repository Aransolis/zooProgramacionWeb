<?php
    require_once('../class/alimento.class.php');
    $Alimentos->validateRol('Empleados');
    
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    include('view/header.php');
    switch($accion){
        case 'create':
            
            $data=isset($_POST["data"])?$_POST["data"]:null;
            if(isset($data["enviar"])){
                
                $alimentos=$Alimentos->create($data);
                if($alimentos){
                    $Alimentos->alerta("Alimento agregado correctamente", "success");
                    $alimentos = $Alimentos->read();
                    include('view/alimentos.php');
                    
                }
                else{
                    $Alimentos->alerta("Error al guardar el alimento", "danger");
                    include("view/alimentos.form.php");
                }
            }else{
                include("view/alimentos.form.php");
            }
            
            break;
        case 'delete':
            $alimentos = $Alimentos->delete($id);
            if($alimentos)
                $Alimentos->alerta("Registro borrado", "success");
            else
                $Alimentos->alerta("Registro no encontrado", "danger");
            $alimentos = $Alimentos->read();
            include('view/alimentos.php'); 
            break;
        case 'update':
            $data=isset($_POST["data"])?$_POST["data"]:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $alimentos=$Alimentos->update($id, $data);
                }
                
                if($alimentos){
                    $Alimentos->alerta("Alimento actualizado correctamente", "success");
                    $alimentos = $Alimentos->read();
                    include('view/alimentos.php');
                    
                }
                else{
                    $Alimentos->alerta("Error al guardar el alimento", "danger");
                    include("view/alimentos.form.php");
                }
            }else{
                if(!is_null($id)){
                    $alimentos=$Alimentos->readOne($id);
                    if(isset($alimentos[0])){
                        $data=$alimentos[0];
                        include("view/alimentos.form.php");
                    }else{
                        $Alimentos->alerta("El registro que trata de modificar no existe", "danger");
                        $alimentos = $Alimentos->read();
                        include('view/alimentos.php');
                    }
                }
            }
                
            break;
        case 'read':
        default:                
            $alimentos = $Alimentos->read();
            include('view/alimentos.php');
    }
    include('view/footer.php');

?>