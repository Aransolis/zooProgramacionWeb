<script src="https://kit.fontawesome.com/cf6a1ce200.js" crossorigin="anonymous"></script>
<h1 class="text-center">Animales</h1>
<a class="btn btn-success" href="animal.php?accion=create" role="button">Agregar</a>
<button class="btn btn-secondary" target="_blank" onclick="printDiv('contenido');">Captura</button>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Animal</th>
            <th scope="col">Familia</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $cont=0; foreach($animales as $animal):?>
        <tr>
            <td><?php echo $animal["id_animal"];?></td>
            <td><?php echo $animal["animal"];?></td>
            <td><?php echo $animal["familia"];?></td>

            <td>
                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button"></a>
                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-href="animal.php?accion=delete&id=<?php echo $animal["id_animal"]; ?>"
                    role="button"><i class="fa-solid fa-trash-can"></i></a>
                <a class="btn btn-info" href="animal.php?accion=update&id=<?php echo $animal["id_animal"]; ?>"
                    role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                <a class="btn btn-success" href="animal.php?accion=edit&id=<?php echo $animal['id_animal'];?>"
                    role="button"><i class="fa-solid fa-circle-info"></i></a>
            </td>
        </tr>
        <?php $cont++; endforeach;  
            ?>
    </tbody>
</table>
<p class="text-right"><?php echo "Se encontraron: " .$cont. " registros."; ?></p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>