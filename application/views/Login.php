<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../Renting_prueba/assets/css/Style.css">
    <link rel="stylesheet" href="../Renting_prueba/assets/img">
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
                        <a class="nav-link" href="<?php echo base_url() . "home/index" ?>">Home</a>
                    </li>
                </ul>
                
                <form class="form-inline my-2 my-lg-0">

                    <a class="btn btn-outline-primary  my-2 my-sm-0 text-white" type="button" href="<?php echo base_url() . "Home/Login" ?>">Login</a>
                    <a class="btn btn-outline-success my-2 my-sm-0 ml-2 mr-3 text-white " type="button" href="<?php echo base_url() . "Home/register" ?>">Registro</a>
                    <input class="form-control mr-sm-2" type="search" placeholder="búsqueda" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">búsqueda</button>
                </form>
            </div>
        </nav>
    </header>
    <br>
    <br>
    <form id="login-form" action="<?php echo base_url() . "Login/login" ?>" method="POST" role="form" style="display: block;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                            </div>
                            <hr>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="container">
                                        <label>TypeUsers:</label>
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
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user" id="user" tabindex="1" class="form-control" placeholder="Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="passw" id="passw" tabindex="2" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <button type="submit" name="userlogin" class="btn btn-primary" value="<?= set_value('userlogin'); ?>" size="25">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <br />
                                                    <a href="<?php echo base_url(); ?>home/register" class="btn btn-sm btn-info btn-block">To SignUp Click Here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
