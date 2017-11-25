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
  public static function sql_query($tsql){
      $conn = sqlsrv_connect(self::$serverName,self::$connectionOptions);   //connects to sql database
      $getResults = sqlsrv_query($conn, $tsql);     //queries the database, stores returned data in a variable
      echo 'connected';     //prints connected onto page
      if ($getResults == FALSE){       //checks if database completes query
          echo (sqlsrv_errors());
        }
        //turns the query results into a
      $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC);
      return $row;
  }
//inserting data into sql server without returning anything back
  public static function sql_insert($tsql){
      $conn = sqlsrv_connect(self::$serverName,self::$connectionOptions);
      sqlsrv_query($conn, $tsql);
  }
}

?>
