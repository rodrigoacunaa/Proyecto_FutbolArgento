<?php
    include('conection.php');

    $con= conectame();
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario del Postulante</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <!-- Form -->
    <div class="site-section" style="margin-top: 20px">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
            <form action="modulo_postulante.php" class="p-5 bg-white border" method="post">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nombre</label>
                  <input type="text" id="nombre_id" name="nombre_name" class="form-control" placeholder="nombre" required="">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Apellido</label>
                  <input type="text" id="apellido_id" name="apellido_name" class="form-control" placeholder="apellido" required="">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="text">Edad</label>
                  <input type="number" id="edad_id" name="edad_name" class="form-control" placeholder="Edad del jugador" required="">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Posicion</label> 
                  <input type="text" id="posicion_id" name="posicion_name" class="form-control" placeholder="Posicion del jugador" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">DNI</label> 
                  <input type="text" id="dni_id" name="dni_name" class="form-control" placeholder="Dni del jugador postulante" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Codigo Postal</label> 
                  <input type="text" id="cod_post_id" name="cod_post_name" class="form-control" placeholder="Su codigo postal" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Provincia</label> 
                  <input type="text" id="provincia_id" name="provincia_name" class="form-control" placeholder="Provincia donde reside" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Localidad</label> 
                  <input type="text" id="localidad_id" name="localidad_name" class="form-control" placeholder="Localidad donde reside" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Telefono</label> 
                  <input type="number" id="telefono_id" name="telefono_name" placeholder="Telefono del postulante" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Email</label> 
                  <input type="email" id="email_id" name="email_name" class="form-control" placeholder="Email del postulante" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Club a Aplicar</label> 
                  <input type="text" id="club_asoc_id" name="club_asoc_name" placeholder="Club al que aplica" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Nacionalidad</label> 
                  <input type="text" id="nacionalidad_id" name="nacionalidad_name" class="form-control" placeholder="Nacionalidad del Postulante" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Fecha de nacimiento</label> 
                  <input type="number" id="fecha_nacimiento_id" name="fecha_nacimiento_name" class="form-control" placeholder="Fecha de nacimiento del postulante" required="">
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
        <!-- /Form -->
    




 </script> 

</body>
</html>
