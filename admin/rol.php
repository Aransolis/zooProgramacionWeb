<?php
    require_once('../class/roles.class.php');
    $ROL->validateRol('Administrador');
    
    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    
    include('view/header.php');
    switch($accion){
        case 'create':  
            $data=isset($_POST["data"])?$_POST["data"]:null;
            if(isset($data["enviar"])){
                
                $roles=$ROL->create($data);
                if($ROL){
                    $ROL->alerta("Rol dada de alta correctamente", "success");
                    $roles = $ROL->read();
                    include('view/roles.php');
                    
                }
                else{
                    $ROL->alerta("Error al guardar el rol", "danger");
                    include("view/roles.form.php");
                }
            }else{
                include("view/roles.form.php");
            }
            
            break;
        case 'delete':
            $roles = $ROL->delete($id);
            if($roles)
                $ROL->alerta("Registro borrado", "success");
            else
                $ROL->alerta("Registro no encontrado", "danger");
            $roles = $ROL->read();
            include('view/roles.php'); 
            break;
        case 'update':
            $data=isset($_POST["data"])?$_POST["data"]:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $roles=$ROL->update($id, $data);              
                    if($roles){
                        $ROL->alerta("Rol actualizado correctamente", "success");
                        $roles = $ROL->read();
                        include('view/roles.php');  
                    }
                    else{
                        $ROL->alerta("Error al guardar el rol", "danger");
                        include("view/roles.form.php");
                    }
                }
            }else{
                if(!is_null($id)){
                    $roles=$ROL->readOne($id);
                    if(isset($roles[0])){
                        $data=$roles[0];
                        include("view/roles.form.php");
                    }else{
                        $ROL->alerta("El registro que trata de modificar no existe", "danger");
                        $roles = $ROL->read();
                        include('view/roles.php');
                    }
                }
            }
                
            break;
        case 'read':
        default:                
            $roles = $ROL->read();
            include('view/roles.php');
    }
    include('view/footer.php');

?>