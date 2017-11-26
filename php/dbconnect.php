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


  //to do for this: set a way to loop thru possible items from return values
  //querying function
  public static function sql_query($tsql){
      $conn = sqlsrv_connect(self::$serverName,self::$connectionOptions);   //connects to sql database
      $getResults = sqlsrv_query($conn, $tsql);     //queries the database, stores returned data in a variable
      echo 'connected'."<br/>";     //prints connected onto page
      echo $getResults."<br/>";

      if ($getResults == FALSE){       //checks if database completes query
          echo (sqlsrv_errors());
        }
        //turns the query results into an array
      //commented section loops through each entry and prints it, remove @row and return part once working
      //while( $row = sqlsrv_fetch_array( $getResults, SQLSRV_FETCH_ASSOC) ) {
      //    echo $row['Location'].", ".$row['address']."<br />";
      //}
      $row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC);  //maybe delete
      return $row;      //maybe delete
  }
//inserting data into sql server without returning anything back
  public static function sql_insert($tsql){
      $conn = sqlsrv_connect(self::$serverName,self::$connectionOptions);
      $getresults = sqlsrv_query($conn, $tsql);
      if ($getResults == FALSE){       //checks if database completes query
          echo (sqlsrv_errors());
      }
  }

}

?>
