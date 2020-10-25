<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./Renting_prueba/assets/css/Style.css">
    <link rel="stylesheet" href="./Renting_prueba/assets/img">
    <title>RENTING!</title>
  </head>
  <body>

   <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <h1 class="navbar-brand">RENTING.COM</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(). "home/index" ?>">Home</a>
                    </li>
                   </ul>
                   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Places to stay</a>
          <a class="dropdown-item" href="#">Experiences</a>
          <a class="dropdown-item" href="#">Online experiences</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
                <form class="form-inline my-2 my-lg-0">
                 
                    <a class="btn btn-outline-primary  my-2 my-sm-0 text-white" type="button" href="<?php echo base_url(). "Home/Login" ?>">Login</a>
                    <a class="btn btn-outline-success my-2 my-sm-0 ml-2 mr-3 text-white " type="button" href="<?php echo base_url(). "Home/register" ?>">Registro</a>
                    <input class="form-control mr-sm-2" type="search" placeholder="búsqueda" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">búsqueda</button>
                </form>
            </div>
        </nav>
    </header>
    <form action="<?php echo base_url(). "Sign_in_C/insertUser"?>"  method= "POST">
    <div class="container">
        <div class="row">
            <div class="col">
                    <h1 class="mb-4 mt-4">USER REGISTRATION :</h1>
                    <h1 class="mb-4 mt-4">Welcome, please enter your data correctly :</h1>

                <div class="alert-danger" id="msg-error" style="text-align: left">
                <strong>¡Important!</strong>  Correct the following data.
                </div>
                        <?php echo validation_errors(); ?>
                   
                <div class="form-group">
                    <label for="nombreUsuario">User:</label>
                    <input type="text" class="form-control" id="user" name="user"  placeholder="user" required >
                    <small id="user" class="form-text text-muted">Enter a username to identify yourself on the platform</small>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="passw" name="passw"  minlength=""  maxlength="" placeholder="password" required pattern="[0-9@#$%]{8,16}+">
                </div>
                <div class="form-group">
                    <label for="nombres">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"  maxlength="40" required placeholder="name" maxlength="40" >
                </div>
                <div class="form-group">
                    <label for="apellidos">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname"  maxlength="40" required  placeholder="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required >
                </div>
                    <label >TypeIdentification:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="cc" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        CC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="pas">
                    <label class="form-check-label" for="exampleRadios2">
                        PAS
                    </label>
                </div>
                    <br>
                <div class="form-group">
                    <label for="direccion">Identification:</label>
                    <input type="text" class="form-control" id="identification" name="identification" placeholder="Identification" maxlength="10"  required >
                </div> 
                <br>
                <label >TypeUsers:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeUsers" id="typeUsers" value="client" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Client
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeUsers" id="typeUsers" value="Administration">
                    <label class="form-check-label" for="exampleRadios2">
                    Administration
                    </label>
                    <button type="submit" class="btn btn-primary btn-block mb-5" id="btncreate" name="btncreate">Create account</button>
                    </div>
                        </div>
                    </div>
                </div>
        </div>
    </form>
</body>