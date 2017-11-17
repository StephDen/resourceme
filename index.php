
<!--HTML SECTION-->
<html lang="en">
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
        overflow:visible;
       }
    </style>
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
  <body>

      <h1>AESTHETIC<small class="text-muted">EDWARDO</small></h1>
      <img src="images/logo.png" alt="logo" class="container">
      <button type="button" id="btn">INSERT INTO DB</button>
      <div class="alert alert-primary" role="alert" >
        <p><?php echo "Encrypted Cookie:".$encrypted_string."<br/>";
          echo "Decrypted Cookie:".$decrypted_string;?>
        </p>
      </div>
      <div id="output"></div>
      <!--<div id="map"></div>-->

    <!--GOOGLE MAPS JS-->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc8Wjn3kVVr0XU9Dyi3kWvfaVvSy243sY&callback=initMap">
    </script>
    <script src="js/gglmps.js"></script>
    <!--GOOGLE MAPS JS-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script>
      $(document).ready(function() {
          $('#btn').click(function(){
            $.ajax({
                url: 'php/dbwrite.php',
                type: 'post',
                dataType: 'json',
                data: {
                    msg: 'test'
                },
                success: function(data) {
                    var result = data
                    $('#output').html(result);
                }
            });
          });
      });
    </script>
    <!-- Optional JavaScript -->

  </body>
</html>
