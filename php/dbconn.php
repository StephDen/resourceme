<?php
$serverName = "resourceme.database.windows.net";
$connectionOptions = array(
    "Database" => "User_Id",
    "Uid" => "bigadmin",
    "PWD" => "Qwerty!@#"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

//FUNCTIONS
//

//Executre Query and trap error
function sqlqry($conn,$query_string){
  $getResults = sqlsrv_query($conn, $query_string);
  if ($getResults == FALSE){
    echo (sqlsrv_errors());
    return "error";
  }
  return $getResults;
}
?>