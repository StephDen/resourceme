<?php
$serverName = "resourceme.database.windows.net";
$connectionOptions = array(
    "Database" => "User_Id",
    "Uid" => "bigadmin",
    "PWD" => "Qwerty!@#"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
?>