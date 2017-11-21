<?php
class dbconnect {
  //server name
  private static $serverName = "blochacks.database.windows.net";
  //Connection array with log in credentials
  private static $connectionOptions = array(
      "Database" => "resources",
      "Uid" => "bigadmin",
      "PWD" => "Qwerty!@#"
  );
  //connection variable
  //private static $conn = sqlsrv_connect(self::$serverName, self::$connectionOptions);

  //querying function
  public static function sqlqry(){
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
