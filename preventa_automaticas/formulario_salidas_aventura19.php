<?php
include'././../conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Material Dashboard CSS -->
  <link rel="stylesheet" href="material-dashboard1.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Registro de Usuarios</title>
  <title>Aventura</title>
</head>

<body>
  <style>
    /* Background styles */
    body {
      background-image: url('https://pinguinodigital.com/wp-content/uploads/2020/05/que-puedo-vender-23.jpg');
      background-position: center;
    }

    /* Glassmorphism card effect */
    .card {
      backdrop-filter: blur(25px) saturate(200%);
      -webkit-backdrop-filter: blur(25px) saturate(200%);
      background-color: rgb(17 25 40 / 44%);
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.125);
    }

    /* Generated by https://generator.ui.glass/ */
  </style>
  <center>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header card-header-text card-header-warning">
          <div class="card-text">
            <h4 class="card-title"> Registro de preventa de Motos Aventura</h4>
          </div>
        </div>
        <br>
        <div class="card-body">
          <form class="was-validated" method="POST" action="registro_salidas_aventura19.php">
            <form class="needs-validation " novalidate>
              <div class="form-row">
                <div class="container">
                  <br>
                  <div align="center">
                    <label for="nombre">Seleccione la categoria de motos a la que pertenece:</label>
                    <br>


                    <div class="dropdown">
                      <select name="txtclasificacionmotos1" class="btn btn-warning dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button" name="txtclasificacionmotos1">
                        <option name="idclasificaciondemotos1" value="">Seleccione:</option>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <?php

                          $query = $conn->query("SELECT * FROM tab_clasificacion_motos");
                          while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="' . $valores[1] . '">' . $valores[1] . '</option>';
                          }
                          ?>
                        </div>
                      </select>
                    </div>

                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div align="center">
                    <label for="nombre">Seleccione una referencia de motos de Aventura:</label>
                    <br>
                    <div class="dropdown">
                      <select name="txtclasificacionmotos2" class="btn btn-warning dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button" name="txtclasificacionmotos2">
                        <option name="idclasificaciondemotos2" value="">Seleccione:</option>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <?php

                          $query = $conn->query("SELECT * FROM tab_motos_aventura");
                          while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="' . $valores[1] . '">' . $valores[1] . '</option>';
                          }
                          ?>
                        </div>
                      </select>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="form-group">
                      <label for="nombre">Cantidad de preventa de Motos Aventura:</label>
                      <input type="text" class="form-control" id="datos" placeholder="Cantidad de motos en Preventa" name="txtcantidaautomaticas">
                      <div class="valid-feedback">
                       <b>¡Campo Ok!</b> 
                      </div>
                      <div class="invalid-feedback">
                       <b>¡Corregir Campo!</b> 
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <button type="submit" class="btn btn-warning" name="registro"><b>Preventa Motos</b></button>
                  <a href="/material1/proyecto_principal/info_motos_vendedor/info_aventura_v_strom1050xt.php" class="btn btn-warning"><b>Atras</b></a>
                </form>
        </div>
  </center>
</body>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>

</html> 
