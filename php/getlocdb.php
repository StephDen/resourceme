<<<<<<< HEAD
<?php
require('php/dbconn.php');
//getting the location of SNC Lavalin from db
$qry = "SELECT lat,lng FROM markers WHERE id = 2;";
$getResults= sqlqry($conn, $tsql);
$location = sqlsrv_fetch_array($getResults);
?>
=======
<?php
require('php/dbconn.php');
//getting the location of SNC Lavalin from db
$qry = "SELECT lat,lng FROM markers WHERE id = 2;";
$getResults= sqlqry($conn, $tsql);
$location = sqlsrv_fetch_array($getResults);
?>
>>>>>>> a546e8a67c86ce5e59d282f97a4109ddef510f5d
