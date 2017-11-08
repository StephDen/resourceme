<?php
  //connecting to db
  require('php/dbconn.php');
  require('php/cookiefuncs.php');
  $name = 'edwardo';
  //collecting data from db
  $tsql= "SELECT * FROM test";
  $getResults= sqlsrv_query($conn, $tsql);
  if ($getResults == FALSE)
    echo (sqlsrv_errors());
  $row = sqlsrv_fetch_array($getResults);
  $row = $row['test'];
  $time = time()+60; //store cookie for one year
  setcookie('testencrypt', encryptCookie($row['test']),$time,'/');
  $decookie = decryptCookie($_COOKIE['testencrypt']);
  $thecookie = $_COOKIE['testencrypt']
?>
<html lang="en">
  <head>
    <title>AESTHETIC EDWARDO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

    <h1>AESTHETIC <small class="text-muted"><?php echo $row?> </small></h1>
    <div class="alert alert-primary" role="alert">
      <h1>encryptedCookie: <?php echo $thecookie?></h1>
      <h1>decryptedCookie: <?php echo $decookie;></h1>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
