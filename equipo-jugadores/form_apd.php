<?php
    include('conection.php');

    $con= conectame();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario Del apadrinador</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <!--form-->
        <div class="site-section" style="margin-top: 20px">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
            <form action="modulo_apd.php" class="p-5 bg-white border" method="post">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Estado del Apadrinador</label>
                  <input type="text" id="apadrinador_id" name="apadrinador_estado_name" class="form-control" placeholder="Su estado como APD" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Su nombre de usuario</label>
                  <input type="text" id="username_id" name="username_name" class="form-control" placeholder="Username" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Contraseña</label>
                  <input type="password" id="password_id" name="password_name" class="form-control" placeholder="Ingrese su contraseña" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Numero telefonico</label>
                  <input type="number" id="telefono_id" name="telefono_name" class="form-control" placeholder="Ingrese su numero telefonico" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Email</label>
                  <input type="email" id="email_id" name="email_name" class="form-control" placeholder="Ingrese su email" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Entidad Social perteneciente</label>
                  <input type="text" id="ent_soc_id" name="ent_soc_name" class="form-control" placeholder="Ingrese Entidad Social" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nombre Real del APD</label>
                  <input type="text" id="fullname_id" name="fullname_name" class="form-control" placeholder="Su nombre como figura en su tarjeta identificatoria" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Apellido Real del APD</label>
                  <input type="text" id="surname_id" name="surname_name" class="form-control" placeholder="Su appellido como figura en su tarjeta identificatoria" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Codigo Único a utilizar</label>
                  <input type="password" id="unic_code_id" name="unic_code_name" class="form-control" placeholder="Código Único a Generar" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" id="cargar_datos_name" value="Cargar Datos" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
        <!-- /form -->

</body>
</html>