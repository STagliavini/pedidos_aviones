<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet"/>
        <link href="assets/fonts/ionicons.css" rel="stylesheet" type="text/css"/>
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/login.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card" style="height: auto; width: 200rem;">
                    <div class="card-header">
                        <h3>Pedido de Avion</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calculator"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Fecha" id="fecha1" name="fecha1">

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calculator"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Hora" id="hora1" name="hora1">

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-plane"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Avion" id="avion1" name="avion1">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-gas-pump"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Principal" id="principal1" name="principal1">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-gas-pump"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Auxiliar" id="auxiliar1" name="auxiliar1">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Observaciones" id="obser1" name="obser1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Observaciones" id="obser1" name="obser1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Observaciones" id="obser1" name="obser1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </form>
    </div>
    <?php
    include_once 'app/config.php';
    include_once 'app/BD/Conexion.php';
    ?>
</div>
</div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<script src="assets/js/tether.min.js" type="text/javascript"></script>
</body>
</html>
