<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style type="../text/css">
        body {
            padding-top: 60px;

        } 

        .contenido {
            padding: 10px;
        }
    </style>

<div class="container">
    <section class="contenido">
        <div class="col">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Registrar</a></li>
                <li><a id="tab-consultar" href="#tab2" data-toggle="tab">Consultar</a></li>
                
            </ul>

            <div class="tab-content">
                <div class="tab-pane  active" id="tab1">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 text-center">
                        <h2>Register Accommodation</h2>
                        <div class="alert alert-danger" id="msg-error" style="text-align:left;">
                            <strong>¡Important!</strong> Correct the following data.
                            <div class="list-errors"></div>
                        </div>
                        <form id="form-create-empleado" style="padding:0px 15px;" class="form-horizontal" role="form" action="<?php base_url(); ?>Admin_C/insert" method="POST">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="title" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="type" class="form-control" placeholder="type" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="addess" class="form-control" placeholder="addess" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="rooms" class="form-control" placeholder="rooms" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="area" class="form-control" placeholder="area" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="price" class="form-control" placeholder="price" />
                            </div>
                            <div class="form-group">
                                <input type="file" name="foto_accommodation">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" value="Registrar">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab2">

                    <div class="row">
                        <br>
                        <div class="col-lg-7"></div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="buscar" placeholder="Buscar">
                        </div>
                        <div class="col-lg-2">
                            <input type="button" class="btn btn-primary btn-block" id="btnbuscar" value="Mostrar Todo" data-toggle='modal' data-target='#basicModal'>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div id="listaaccommodation" class="col-lg-8">

                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">Edit accommodation</div>
                                <div class="panel-body">
                                    <form id="form-actualizar" class="form-horizontal" action="<?php echo base_url(); ?>Admin_C/actualizar" method="post" role="form" style="padding:0 10px;">
                                        <div class="form-group">
                                            <label>Title:</label>
                                            <input type="hidden" id="idsele" name="idesele" value="">
                                            <input type="text" name="titlesele" id="titlesele" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Type:</label>
                                            <input type="text" name="typesele" id="typesele" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Addess:</label>
                                            <input type="text" name="addesssele" id="addesssele" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Rooms:</label>
                                            <input type="text" name="Rooms" id="Rooms" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Area:</label>
                                            <input type="text" name="areasele" id="areasele" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Price:</label>
                                            <input type="text" name="pricesele" id="pricesele" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Select image</label>
                                            <input type="file" name="foto_nueva">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" id="btnactualizar" class="btn btn-success btn-block">Guardar</button>

                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </section>


</div>


<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/empleado.js"></script>
<script src="<?php echo base_url(); ?>assets/js/login.js"></script>
</body>

</html>
</body>

</html>