<?php 
    session_start();
    $_SESSION["operacion"]+=1000;
    print_r($_SESSION);
?>