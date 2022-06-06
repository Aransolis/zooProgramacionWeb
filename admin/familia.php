
<?php
    require_once('../class/familias.class.php');
    require_once('../class/atracciones.class.php');
    $Atracciones->validateRol('Empleados');


    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    $id = isset($_GET['id'])?$_GET['id']:null;
    $id = is_numeric($id)?$id:null;
    $atracciones = $Atracciones->read();
    include('view/header.php');
    //$validado = $Atracciones->login('18030151@itcelaya.edu.mx', '123');


    
    switch($accion){
        case 'create':  
            $data=isset($_POST["data"])?$_POST["data"]:null;
            if(isset($data["enviar"])){
                
                $familias=$Familias->create($data);
                if($familias){
                    $Familias->alerta("Familia dada de alta correctamente", "success");
                    $familias = $Familias->read();
                    include('view/familias.php');
                    
                }
                else{
                    $Familias->alerta("Error al guardar la familia", "danger");
                    include("view/familias.form.php");
                }
            }else{
                include("view/familias.form.php");
            }
            
            break;
        case 'delete':
            $familias = $Familias->delete($id);
            if($familias)
                $Familias->alerta("Registro borrado", "success");
            else
                $Familias->alerta("Registro no encontrado", "danger");
            $familias = $Familias->read();
            include('view/familias.php'); 
            break;
        case 'update':
            $data=isset($_POST["data"])?$_POST["data"]:null;
            if(isset($data["enviar"])){
                if(!is_null($id)){
                    $familias=$Familias->update($id, $data);              
                    if($familias){
                        $Familias->alerta("Familias actualizada correctamente", "success");
                        $familias = $Familias->read();
                        include('view/familias.php');  
                    }
                    else{
                        $Familias->alerta("Error al guardar la familia", "danger");
                        include("view/familias.form.php");
                    }
                }
            }else{
                if(!is_null($id)){
                    $familias=$Familias->readOne($id);
                    if(isset($familias[0])){
                        $data=$familias[0];
                        include("view/familias.form.php");
                    }else{
                        $Familias->alerta("El registro que trata de modificar no existe", "danger");
                        $familias = $Familias->read();
                        include('view/familias.php');
                    }
                }
            }
                
            break;
        case 'read':
        default:                
            $familias = $Familias->read();
            include('view/familias.php');
    }
    include('view/footer.php');
    $zoologico->enviarEmail('aran.solis1088@gmail.com',"Prueba2", "Este es otro correo de prueba");

?>