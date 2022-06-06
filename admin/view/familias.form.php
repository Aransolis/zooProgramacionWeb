
<?php if($accion=="create"):?>
<h1 class="text-center">Nueva Familia</h1>
<?php else: $accion="update"?>
<h1 class="text-center">Modificar Familia</h1>



<div class="row text-center">
    <div class="col">
        <img class="rounded-circle" src="../<?php echo $data["fotografia"];?>" />
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<?php endif; ?>
<form method="POST" enctype="multipart/form-data"
    action="familia.php?accion=<?php echo $accion;?><?php if($accion =="update") echo "&id=".$id; ?>">
    <label class="form-label">Nombre de la familia: </label>
    <input class="form-control" type="text" value="<?php echo ($accion=="update")?$data["familia"]:""; ?>"
        name="data[familia]" />
    <label for="" class="form-label">Atracción: </label>
    <select name="data[id_atraccion]" class="form-select"id="">
        <?php
            foreach($atracciones as $atraccion):
        ?>
        <option <?php if(isset($data["id_atraccion"])){if($data["id_atraccion"]==$atraccion["id_atraccion"]) echo "selected";} ?> value="<?php echo $atraccion["id_atraccion"] ?>"><?php echo $atraccion["atraccion"]?></option>
        <?php endforeach;?>
    </select>
    <label class="form-label">Foto: </label>
    <input class="form-control" type="file" value="<?php echo ($accion=="update")? $data["fotografia"]:""; ?>"
        name="fotografia" />
    <input class="btn btn-primary" type="submit" value="Guardar familia" name="data[enviar]" />
</form>