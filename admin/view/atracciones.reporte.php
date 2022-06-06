
    <h1 style="color:red">Atracciones</h1>
    <img style="width: 100%;" src="../images/IMG1.jpg" alt="Una imagen de atraccion"/>
    
    <table>
        <thead>
            <tr>
                <th>Num renglon</th>
                <th>Nombre atracción</th>
                <th>Descripción</th>

            </tr>
        </thead>
        <tbody>
            <?php $cont=0; foreach($atracciones as $atraccion):?>
            <tr>
                <td><?php echo $atraccion["id_atraccion"];?></td>
                <td><?php echo $atraccion["atraccion"];?></td>
                <td><?php echo $atraccion["descripcion"]; ?></td>
                
            </tr>
            <?php endforeach;?>
            
        </tbody>
    </table>

    
    