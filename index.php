<?php

?>

<html lang="en">
  <head>
    <title>ResourceMe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/images/favicon.png">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <link href="/css/spacing.css" rel="stylesheet">
      
  </head>
  <body>


    <header class="masthead clearfix">
      <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand"><!--<img src="images/logo.png" style="height:45px;">--><b>Resource</b>Me</a>
            <div class="inner">
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Contact</a>
              </nav>
            </div>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><img src="images/resourceme_black.png" style="height:200px;"></h1>
          <p class="lead text-muted">Journey of a Refugee. Simplified. </p>
          <p>
            <button type=button class="btn btn-primary" data-toggle="modal" data-target="#SignInModal">Sign In</button>
            <button type=button class="btn btn-secondary" data-toggle="modal" data-target="#RegisterModal">Register</button>
          </p>
        </div>
      </section>

      <div class="album" style="background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);">
        <div class="container">

        <h1 class="display-4">Welcome to <b>Resource</b>Me</h1>
        
            <p>Streamlined processing. Diverse analytics.</p>
            
          <div class="row">
            <div class="card">
              <img src="https://cdn.stocksnap.io/img-thumbs/960w/EB1C4YD25X.jpg" alt="Card image cap">
              <p class="card-text">Being displaced can happen at any time. That's why you can start your registration process online at your leisure.</p>
            </div>
            <div class="card">
              <img src="http://www.unhcr.org/thumb1/5576fd6d6.jpg" alt="Card image cap">
              <p class="card-text">Upon arrival at a refugee camp or contact with officials hosting refugees, the process becomes more streamlined so that you can receive support and resources as soon as possible.</p>
            </div>
            <div class="card">
              <img src="https://cdn.stocksnap.io/img-thumbs/960w/1LW59GG0WK.jpg" alt="Card image cap">
              <p class="card-text">Data collected can help governments and NGOs predict and plan for the future, allocating resources where they are needed on a proactive basis.</p>
            </div>

            
          </div>

        </div>
      </div>
        
        
    <!-- Modal -->
    <div class="modal fade" id="SignInModal" tabindex="-1" role="dialog" aria-labelledby="SignInModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="SignInModalLabel">Sign In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="login.php" method="post">
                  <div class="form-group">
                    <label for="inputUser">Username</label>
                    <input type="text" class="form-control" id="inputUser" placeholder="Enter username" name="username">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter password" name="password">
                  </div>
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
        
        <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="RegisterModalLabel">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
                  <div class="form-group">
                    <label for="inputUser">Username</label>
                    <input type="text" class="form-control" id="inputUser" placeholder="Enter username" name="username">
                      <small class="form-text text-muted">This username will stay with you throughout your journey.</small>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter password" name="password">
                      <small class="form-text text-muted">Make sure that you keep this secure!</small>
                  </div>
                  <button type="submit" class="btn btn-primary">Register</button>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
        
    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p><b>Resource</b>Me | BlocHacks 2017 | The Refugee Centre @ Concordia University </p>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
