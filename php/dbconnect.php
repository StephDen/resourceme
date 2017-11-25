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

  //querying function

    /**
     * @param $tsql
     * @return array|false|null
     */
    public static function sqlqry1($tsql){
      $conn = sqlsrv_connect(self::$serverName,self::$connectionOptions);
      $getResults = sqlsrv_query($conn, $tsql);
      echo 'connected';
      if ($getResults == FALSE){
          echo (sqlsrv_errors());
        }
      $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC);
      return $row;
  }

}

?>
