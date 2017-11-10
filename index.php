<?php
  //connecting to db
  require('php/dbconn.php');
  require('php/cookiefuncs.php');
  //collecting data from db
  $time1 = time();
  $tsql= "INSERT INTO test VALUES (".$time1.");";
  $getResults= sqlqry($conn, $tsql);
    
  $tsql= "SELECT * FROM test WHERE test = ".$time1.";";
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


<!--HTML SECTION-->
<html lang="en">
  <head>
    <title>AESTHETIC EDWARDO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/gradientanimate.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body onload="myFunction()" style="margin:0;">

    <div class="loadercontainer" id="loader"></div> 
    
    <div style="display:none;" id="myDiv" class="animate-bottom">
      <h1>AESTHETIC<small class="text-muted"><?php echo $row['test'];?> </small></h1>
      <div class="alert alert-primary" role="alert">
        <p class="container"><?php echo "Encrypted Cookie:".$encrypted_string."<br/>";
          echo "Decrypted Cookie:".$decrypted_string;?>
        </p>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>