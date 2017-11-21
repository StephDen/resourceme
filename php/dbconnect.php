<?php
class dbconnect {

  //querying function
  public static function sqlqry1(){
      //server name
      $serverName = "blochacks.database.windows.net";
      //Connection array with log in credentials
      $connectionOptions = array(
          "Database" => "resources",
          "Uid" => "bigadmin",
          "PWD" => "Qwerty!@#"
      );
      $conn = sqlsrv_connect(self::$serverName, self::$connectionOptions);
      $getResults = sqlsrv_query(self::$conn, $tsql);
      echo 'connected';
      if ($getResults == FALSE){
          echo (sqlsrv_errors());
        }
      $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)
      return $row;
  };

}

?>
