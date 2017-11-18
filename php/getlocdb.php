<?php
require('php/dbconn.php');
//getting the location of SNC Lavalin from db
$qry = "SELECT lat,lng FROM markers WHERE id = 2;";
$getResults= sqlqry($conn, $tsql);
$location = sqlsrv_fetch_array($getResults);
?>
