<form action="<?php echo base_url(). "home/"?>"  method= "POST">
<div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mb-4 mt-4">USER REGISTRATION :</h1>
                    <form>
                        <div class="form-group">
                            <label for="nombreUsuario">User:</label>
                            <input type="text" class="form-control" id="user" name="user" placeholder="user">
                            <small id="user" class="form-text text-muted">Enter a username to identify yourself on the platform</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="passw" name="passw" placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="nombres">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Lastname:</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Cell:</label>
                            <input type="number" class="form-control" id="cell" name="cell" placeholder="cell">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="address">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-5" id="btncreate" name="btncreate">Create account</button>
                    </form>
                </div>
            </div>
        </div>