<script src="https://kit.fontawesome.com/cf6a1ce200.js" crossorigin="anonymous"></script>
    <h1 class="text-center"><?php echo $animal[0]['animal'];?></h1>

    <a class="btn btn-success" 
    href="animal.php?accion=create_animal&id=<?php echo $animal[0]['id_animal'];?>" role="button">Agregar</a>
    <button class="btn btn-secondary" target="_blank" onclick="printDiv('contenido');">Captura</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nacimiento</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $cont=0; foreach($animales_detalles as $animal_detalle):?>
            <tr>
                <td><?php echo $animal_detalle["nacimiento"];?></td>
                <td><?php echo $animal_detalle["cantidad"];?></td>
                
                <td><a class="btn btn-danger" 
                href="animal.php?accion=delete_animal&id=<?php echo $animal[0]['id_animal'];?>&consecutivo=<?php echo $animal_detalle['consecutivo']; ?>"
                role="button"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
            <?php $cont++; endforeach;  
            ?>
        </tbody>
    </table>
    <p class="text-right"><?php echo "Se encontraron: " .$cont. " registros."; ?></p>
    

    