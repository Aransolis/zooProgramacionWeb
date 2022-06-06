
    <h1 class="text-center">Atracciones</h1>
    <a class="btn btn-success" href="atraccion.php?accion=create" role="button">Agregar</a>
    <a  href="atraccion.php?accion=reporte" role="button"><i class="fa-solid fa-flag"></i></i></a>
    <button class="btn btn-secondary" target="_blank" onclick="printDiv('contenido');">Captura</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Num renglon</th>
                <th scope="col">Nombre atracción</th>
                <th scope="col">Descripción</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $cont=0; foreach($atracciones as $atraccion):?>
            <tr>
                <th scope="row"><?php echo $cont; $cont++?></th>
                <td><?php echo $atraccion["atraccion"];?></td>
                <td><?php echo substr($atraccion["descripcion"],0 , 50)."..."; ?></td>
                <td><a class="btn btn-danger"
                        href="atraccion.php?accion=delete&id=<?php echo $atraccion["id_atraccion"]; ?>"
                        role="button">Borrar</a>
                        <a class="btn btn-info"
                        href="atraccion.php?accion=update&id=<?php echo $atraccion["id_atraccion"]; ?>"
                        role="button">Actualizar</a>
                        </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <p class="text-right"><?php echo "Se encontraron: " .$cont. " registros."; ?></p>
    
    <script src="https://kit.fontawesome.com/cf6a1ce200.js" crossorigin="anonymous"></script>