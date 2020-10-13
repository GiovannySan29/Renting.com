
<!-- <form action="  method= "POST">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Giovanny & Samuel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="http://localhost/WebllFirstMoment/insert">Insert </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link"  href="http://localhost/WebllFirstMoment/update">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/WebllFirstMoment/delete">Delete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/WebllFirstMoment/select">query</a>
      </li>
    </ul>
  </div>
</nav> 

 
  <div class="form-group">
    <div class="col-md-6 mb-3">
      <label >document</label>
      <input type="number" class="form-control" name="document" required>
    </div>
   
  <button class="btn btn-primary" type="submit">insert</button>
  </div>
  
</form> -->
<form action="<?php echo base_url(). "home/UpdateUser"?>"  method= "POST">
<div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mb-4 mt-4">USER UPDATE:</h1>
                    <div class="alert-danger" id="msg-error" style="text-align: left">
                <strong>¡Importante!</strong>Corregir los siguientes datos.
            </div>
            <?php echo validation_errors(); ?>
                    <form>
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
                       
                        
                        <button type="submit" class="btn btn-primary btn-block mb-5" id="btnUpdate" name="btnUpdate">Update account</button>
                    </form>
                </div>
            </div>
        </div>