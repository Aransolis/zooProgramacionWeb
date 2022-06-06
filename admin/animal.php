<?php
    require_once('../class/animales.class.php');
    require_once('../class/familias.class.php');
    require_once('../class/alimento.class.php');
    $Animales->validateRol('Empleados');

    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    $consecutivo = isset($_GET['consecutivo'])?$_GET['consecutivo']:null;
    $familias = $Familias->read();
    $alimentos = $Alimentos->read();
    
    include('view/header.php');
    switch($accion){
        case 'create':  
            $data=isset($_POST["data"])?$_POST["data"]:null;
            if(isset($data["enviar"])){
                
                $animales=$Animales->create($data);
                if($Animales){
                    $Familias->alerta("Animales dada de alta correctamente", "success");
                    $animales = $Animales->read();
                    include('view/animales.php');
                    
                }
                else{
                    $Animales->alerta("Error al guardar el animal", "danger");
                    include("view/animales.form.php");
                }
            }else{
                include("view/animales.form.php");
            }
            
            break;
        case 'delete':
            $animales = $Animales->delete($id);
            if($animales)
                $Animales->alerta("Registro borrado", "success");
            else
                $Animales->alerta("Registro no encontrado", "danger");
            $animales = $Animales->read();
            include('view/animales.php'); 
            break;
        case 'update':
            $data=isset($_POST["data"])?$_POST["data"]:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $animales=$Animales->update($id, $data);              
                    if($animales){
                        $Animales->alerta("Animales actualizada correctamente", "success");
                        $animales = $Animales->read();
                        include('view/animales.php');  
                    }
                    else{
                        $Animales->alerta("Error al guardar el animal", "danger");
                        include("view/animales.form.php");
                    }
                }
            }else{
                if(!is_null($id)){
                    $animales=$Animales->readOne($id);
                    $misAlimentos = $Animales->read_alimento($id);
                    
                    if(isset($animales[0])){
                        $data=$animales[0];
                        include("view/animales.form.php");
                    }else{
                        $Animales->alerta("El registro que trata de modificar no existe", "danger");
                        $animales = $Animales->read();
                        include('view/animales.php');
                    }
                }
            }
                
            break;
        case 'edit':
            $animal = $Animales->readOne($id);
            $animales_detalles = $Animales->read_animal($id);
            include('view/animales_detalles.php');
            break;
        case 'delete_animal':
            if(!is_null($consecutivo) && !is_null($id)){
                $animales = $Animales->delete_animal($id, $consecutivo);
                if($animales)
                    $Animales->alerta("Registro borrado exitosamente", "success");
                else
                    $Animales->alerta("Registro no encontrado", "danger");
                
                $animal = $Animales->readOne($id);
                $animales_detalles = $Animales->read_animal($id);
                include('view/animales_detalles.php');
            }
            break;

        case 'create_animal':
            if(isset($_POST['data']['enviar'])){
                $data = $_POST['data'];
                $animal = $Animales->create_animal($data,$id);
                if($animal)
                    $Animales->alerta("Registro insertado correctamente", "success");
                else
                    $Animales->alerta("Registro no fue insertado", "danger");
                $animal = $Animales->readOne($id);
                $animales_detalles = $Animales->read_animal($id);
                include('view/animales_detalles.php');
            }else{
                $animal = $Animales->readOne($id);
                include('view/animales_detalles.form.php');
            }
            
            break;
        default:                
            $animales = $Animales->read();
            include('view/animales.php');
    }
    include('view/footer.php');

?>