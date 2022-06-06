<?php if($accion=="create"):?>
<h1 class="text-center">Nuevo Usuario</h1>
<?php else: $accion="update"?>
<h1 class="text-center">Modificar Usuario</h1>


<?php endif; ?>
<form method="POST" enctype="multipart/form-data"
    action="usuario.php?accion=<?php echo $accion;?><?php if($accion =="update") echo "&id=".$id; ?>">
    <label class="form-label">Correo del usuario: </label>
    <input class="form-control" type="text" value="<?php echo ($accion=="update")?$data["correo"]:""; ?>"
        name="data[correo]" />
    
    <label class="form-label">Contraseña del usuario: </label>
    <input class="form-control" type="text" value=""
        name="data[contrasena]" />

    <h3>Escoge el tipo de Rol</h3>
    

    <?php foreach($roles as $rol):?>
        <input <?php if(isset($misRoles)){if(in_array($rol['id_rol'], $misRoles)){ echo 
        " checked ";}}?> class="form-check-input" type="checkbox" name="rol[<?php echo 
        $rol['id_rol'] ?>]" />
        <label class="form-check-label" for="flexCheckChecked"
        for=""><?php echo $rol['rol'] ?></label>
    <?php endforeach; ?>
    <br>
    <input class="btn btn-primary" type="submit" value="Guardar Usuario" name="data[enviar]" />
</form>


