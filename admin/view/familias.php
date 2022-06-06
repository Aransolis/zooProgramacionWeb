<div id='contenido'>
    <h1 class="text-center">Familias</h1>
    <a class="btn btn-success" href="familia.php?accion=create" role="button">Agregar</a>
    <button class="btn btn-secondary" target="_blank" onclick="printDiv('contenido');">Captura</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Familia</th>
                <th scope="col">Atracción</th>
                <th scope="col">Fotografia</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $cont=1; foreach($familias as $familia):?>
            <tr>
                <td><?php echo $familia["id_familia"];?></td>
                <td><?php echo $familia["familia"];?></td>
                <td><?php echo $familia["atraccion"];?></td>
                <td><img class="rounded-circle" src="../<?php echo 
                $familia["fotografia"] ?>" alt="" width="50" height="50"></td>
                <td><a class="btn btn-danger" href="familia.php?accion=delete&id=<?php echo $familia["id_familia"]; ?>"
                        role="button">Borrar</a>
                    <a class="btn btn-info" href="familia.php?accion=update&id=<?php echo $familia["id_familia"]; ?>"
                        role="button">Actualizar</a>
                </td>
            </tr>
            <?php $cont++; endforeach;  
            ?>
        </tbody>
    </table>
    <p class="text-right"><?php echo "Se encontraron: " .$cont. " registros."; ?></p>
</div>

