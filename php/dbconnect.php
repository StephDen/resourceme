<?php
class dbconnect{
  //server name
  private $serverName = "resourceme.database.windows.net";
  //Connection array with log in credentials
  private $connectionOptions = array(
      "Database" => "User_Id",
      "Uid" => "bigadmin",
      "PWD" => "Qwerty!@#"
  );
  //connection variable
  private $conn = sqlsrv_connect($this->$serverName, $this->$connectionOptions);

  //querying function
  public static function sqlqry($tsql){
      $getResults = sqlsrv_query($this->$conn, $tsql);
      if ($getResults == FALSE){
          echo (sqlsrv_errors());
        }
      $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)
      return $row;
  }

}

?>
