<?php
$file = fopen("atracciones.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
$atracciones = array();
while(!feof($file))
{
    $linea = fgets($file);
    $atraccion = explode("|",$linea);
    array_push($atracciones, $atraccion);

}
fclose($file);

foreach($atracciones as $atraccion){
    echo "<h1>.$atraccion[0].</h1>";
    ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.64997905788!2d<?php echo $atraccion[2];?>!3d<?php echo $atraccion[1];?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0ddaf716ebe1%3A0x3a2eaa692b343ddf!2sCaba%C3%B1a%20Encantada!5e0!3m2!1sen!2smx!4v1646629351822!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <?php
}
?>
    
    


