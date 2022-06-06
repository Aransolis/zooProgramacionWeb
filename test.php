<?php
$dbh = new PDO ( 'mysql:dbname=zoologico;host=127.0.0.1:33066', 'zoologico', '99882255aass') ;
$sth = $dbh->prepare("SELECT * from atraccion");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
print_r($result);
?>