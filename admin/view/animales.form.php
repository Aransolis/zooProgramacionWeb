<?php if($accion=="create"):?>
<h1 class="text-center">Nuevo Animal</h1>
<?php else: $accion="update"?>
<h1 class="text-center">Modificar Animal</h1>


<?php endif; ?>
<form method="POST" enctype="multipart/form-data"
    action="animal.php?accion=<?php echo $accion;?><?php if($accion =="update") echo "&id=".$id; ?>">
    <label class="form-label">Nombre del animal: </label>
    <input class="form-control" type="text" value="<?php echo ($accion=="update")?$data["animal"]:""; ?>"
        name="data[animal]" />
    <label for="" class="form-label">Familia: </label>
    <select name="data[id_familia]" class="form-select"id="">
        <?php
            foreach($familias as $familia):
        ?>
        <option <?php if(isset($data["id_familia"])){
        if($data["id_familia"]==$familia["id_familia"]) echo
        "selected";} ?> value="<?php echo $familia["id_familia"] ?>">
        <?php echo $familia["familia"]?></option>
        <?php endforeach;?>
    </select>

    <h3>Escoge el tipo de alimento</h3>
    
    <?php foreach($alimentos as $alimento):?>
        <input <?php if(isset($misAlimentos)){if(in_array($alimento['id_alimento'], $misAlimentos)){ echo 
        " checked ";}}?> class="form-check-input" type="checkbox" name="alimento[<?php echo 
        $alimento['id_alimento'] ?>]" />
        <label class="form-check-label" for="flexCheckChecked"
        for=""><?php echo $alimento['alimento'] ?></label>
    <?php endforeach; ?>
    <br>
    <input class="btn btn-primary" type="submit" value="Guardar animal" name="data[enviar]" />
</form>


