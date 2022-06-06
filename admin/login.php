<?php 
    require_once('../class/zoologico.class.php');
    include_once('view/header_sin_menu.php');

    $accion = isset($_GET['accion'])?$_GET['accion']:null;
    switch($accion){
        case 'login':
            if(isset($_POST['correo']) && isset($_POST['contrasena'])){
                $correo = $_POST['correo'];
                $contrasena = $_POST['contrasena'];
                if($zoologico->validateEmail($correo)){
                    if($zoologico->login($correo, $contrasena)){
                        include_once('index.php');
                    }else{
                        $zoologico->alerta('Usuario y contraseña no validos ', 'danger');
                    }
                }
            }
            break;
        case 'olvido':
            if(isset($_POST['correo'])){
                $correo = $_POST['correo'];
                if($zoologico->validateEmail($correo)){
                    if($zoologico->recuperar($correo)){
                        echo 'OK';
                    }else{
                        $zoologico->alertaError('Correo electronico no existe');
                    }
                }else{
                    $zoologico->alertaError('Correo electronico no existe');
                }
            }
            include_once('view/login.olvido.php');
            
            break;

        case 'restablecer':
            if(isset($_GET['correo']) && isset($_GET['token'])){
                $correo = $_GET['correo'];
                $token = $_GET['token'];
                if($zoologico->validarToken($correo,$token)){
                    include_once('view/login.restablecer.php');
                }else{
                    $zoologico->alertaError('El token a caducado');
                }
            }else{
                $zoologico->alertaError('Un error grave a ocurrido');
            }
            break;

            case 'nueva':
                if(isset($_GET['correo']) && isset($_POST['token']) && isset($_POST['contrasena'])){
                    $correo = $_GET['correo'];
                    $contrasena = $_POST['contrasena'];
                    $token = $_POST['token'];
                    if($zoologico->validarToken($correo,$token)){
                        if($zoologico->nuevaContrasena($correo,$contrasena,$token)){
                            $zoologico->alerta('Su contraseña ha sido cambiada, por favor inicie sesion','success');
                            include_once('view/login.php');
                        }else{
                            echo 'error';
                        }
                    }else{
                        $zoologico->alerta('El token a caducado','danger');
                    }
                }else{
                    $zoologico->alerta('Un error grave a ocurrido','danger');
                }
                
    
                break;
        case 'logOut':
            $zoologico->logOut();
            break;
        default:
        include('view/login.php');
        
    }

    include_once('view/footer.php');
?>