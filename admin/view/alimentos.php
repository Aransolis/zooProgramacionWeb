
    <h1 class="text-center">Alimentos</h1>
    <a class="btn btn-success" href="alimento.php?accion=create" role="button">Agregar</a>
    <button class="btn btn-secondary" target="_blank" onclick="printDiv('contenido');">Captura</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre alimento</th>
                <th scope="col">Opciones</th>

            </tr>
        </thead>
        <tbody>
        <?php $cont?>
            <?php $cont=0; foreach($alimentos as $alimento):?>
            <tr>
                <?php $cont++?>
                <td><?php echo $alimento["id_alimento"];?></td>
                <td><?php echo substr($alimento["alimento"],0 , 50)."..."; ?></td>
                <td><a class="btn btn-danger"
                        href="alimento.php?accion=delete&id=<?php echo $alimento["id_alimento"]; ?>"
                        role="button">Borrar</a>
                        <a class="btn btn-info"
                        href="alimento.php?accion=update&id=<?php echo $alimento["id_alimento"]; ?>"
                        role="button">Actualizar</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <p class="text-right"><?php echo "Se encontraron: " .$cont. " registros."; ?></p>
    
    