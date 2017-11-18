<?php
  //connecting to db
  require('php/dbconn.php');
  require('php/cookiefuncs.php');
  //collecting data from db
  $tsql= "INSERT INTO test VALUES (".$input.");";
  $getResults= sqlqry($conn, $tsql);

  $tsql= "SELECT * FROM test WHERE test = ".$input.";";
  $getResults= sqlqry($conn, $tsql);

  $row = sqlsrv_fetch_array($getResults);
  $str = $row['test'];
  $cookiename = 'edwardo';
  $my_salt = 'SomeRandomString-hY5K92AzVnMYyT7';

  //setting cookie
  setSafeCookie($cookiename,$my_salt,$str);
  $encrypted_string = $_COOKIE[$cookiename];
  $decrypted_string = getSafeCookie($my_salt, $cookiename);
?>
