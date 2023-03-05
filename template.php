<?php
include 'resultados.php';
include 'conexion.php';
/*include'panel.php';*/
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Susuki</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />

<body class="dark-edition inicio">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-color="navbar-transparent" data-background-color="black" data-image="./assets/img/imagen1.jpg">

      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          SUZUKI
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <div class="user">
              <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                  <img src="//cdn0.iconfinder.com/data/icons/user-pictures/100/male-256.png" alt="Circle Image" class="rounded-circle img-fluid">
                  <span>
                    Bienvenid@ <?php echo $_SESSION['nombreusuario']; ?>!
                    <b class="caret"></b>
                  </span>
                </a>
                <div>
                  <div class="collapse" id="collapseExample">
                    <ul class="nav">
                      <li class="nav-item">
                        <a class="nav-link" href="/material1/examples/perfil3/crud_principal.php">
                          <i class="material-icons">manage_accounts</i>
                          <span class="sidebar-normal"> Editar Perfil </span>
                        </a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div>

          <li class="nav-item active ">
            <a class="nav-link" href="/material1/template.php">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#pagesExamples" aria-expanded="false">
              <i class="material-icons">two_wheeler</i>
              <p> Tipos de Motos
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="/material1/proyecto_principal/crud_motos_administrador/crud_motos_automaticas/crud_automaticas.php">
                    <i class="material-icons">two_wheeler</i>
                    <span class="sidebar-normal">Automáticas </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/material1/proyecto_principal/crud_motos_administrador/crud_motos_semiautomaticas/crud_semiautomaticas.php">
                    <i class="material-icons">two_wheeler</i>
                    <span class="sidebar-normal"> Semiautomáticas </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/material1/proyecto_principal/crud_motos_administrador/crud_motos_sport/crud_sport.php">
                    <i class="material-icons">two_wheeler</i>
                    <span class="sidebar-normal"> Sport </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/material1/proyecto_principal/crud_motos_administrador/crud_motos_enduro/crud_enduro.php">
                    <i class="material-icons">two_wheeler</i>
                    <span class="sidebar-normal"> Enduro</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/material1/proyecto_principal/crud_motos_administrador/crud_motos_cruiser/crud_cruiser.php">
                    <i class="material-icons">two_wheeler</i>
                    <span class="sidebar-normal"> Cruiser </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/material1/proyecto_principal/crud_motos_administrador/crud_motos_aventura/crud_aventura.php">
                    <i class="material-icons">two_wheeler</i>
                    <span class="sidebar-normal"> Aventura </span>
                  </a>
                </li>

                <div class="collapse" id="">
                  <ul class="nav">
                    <li class="nav-item ">
                      <a class="nav-link" href="">

                      </a>
                    </li>
                    </a>
          </li>
        </ul>
      </div>
      </li>
      </li>
      </ul>
    </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link collapsed" data-toggle="collapse" href="#usuarios" aria-expanded="false">
        <i class="material-icons">person_search</i>
        <p> Usuarios
          <b class="caret"></b>
        </p>
      </a>
      <div class="collapse" id="usuarios" style="">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="/material1/proyecto_principal/formulario_registro/administrativo/formulario_administrativo.html">
              <i class="material-icons">drive_file_rename_outline</i>
              <span class="sidebar-normal"> Formulario Registro</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/material1/proyecto_principal/crud_usuarios/administrador/crud_administrador.php">
              <i class="material-icons">drive_file_rename_outline</i>
              <span class="sidebar-normal"> Tabla de Usuarios</span>
            </a>
          </li>
          </a>
    </li>
    </ul>
  </div>
  </li>
  <li class="nav-item ">
    <a class="nav-link collapsed" data-toggle="collapse" href="#reportes" aria-expanded="false">
      <i class="material-icons">summarize</i>
      <p> Reportes
        <b class="caret"></b>
      </p>
    </a>
    <div class="collapse" id="reportes" style="">
      <ul class="nav">
        <li class="nav-item ">
          <a class="nav-link" href="/material1/proyecto_principal/reportes/administrador/pdf_automaticas.php">
            <i class="material-icons">summarize</i>
            <span class="sidebar-normal"> Automaticas</span>
          </a>
        </li>
        </a>
        <li class="nav-item ">
          <a class="nav-link" href="/material1/proyecto_principal/reportes/administrador/pdf_semiautomaticas.php">
            <i class="material-icons">summarize</i>
            <span class="sidebar-normal">Semiautomáticas </span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/material1/proyecto_principal/reportes/administrador/pdf_sport.php">
            <i class="material-icons">summarize</i>
            <span class="sidebar-normal"> Sport </span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/material1/proyecto_principal/reportes/administrador/pdf_enduro.php">
            <i class="material-icons">summarize</i>
            <span class="sidebar-normal"> Enduro </span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/material1/proyecto_principal/reportes/administrador/pdf_cruiser.php">
            <i class="material-icons">summarize</i>
            <span class="sidebar-normal"> Cruiser </span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/material1/proyecto_principal/reportes/administrador/pdf_aventura.php">
            <i class="material-icons">summarize</i>
            <span class="sidebar-normal"> Aventura </span>
          </a>
        </li>



  </li>

  </ul>
  </div>
  </li>
  <li class="nav-item ">
    <a class="nav-link collapsed" data-toggle="collapse" href="#vendedor" aria-expanded="false">
      <i class="material-icons">support_agent</i>
      <p> Vendedor
        <b class="caret"></b>
      </p>
    </a>
    <div class="collapse" id="vendedor" style="">
      <ul class="nav">
        <li class="nav-item ">
          <a class="nav-link" href="/material1/proyecto_principal/formulario_registro/vendedor/formulario_vendedor.html">
            <i class="material-icons">group_add</i>
            <span class="sidebar-normal"> Nuevo Vendedor</span>
          </a>
        </li>
        </a>
        
  </li>
  </ul>
  </div>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="/material1/proyecto_principal/formularios/formulario_clasificacion_motos.html">
      <i class="material-icons">app_registration</i>
      <p>Registro Clasificacion</p>
    </a>
  </li>
  





  <!-- your sidebar here -->
  </ul>
  </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">

          <a class="navbar-brand" href="javascript:;">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
          <form class="navbar-form">
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">
                <i class="material-icons">dashboard</i>
                <p class="d-lg-none d-md-block">
                  Stats
                </p>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="cerrar.php">Cerrar Sesion</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- your navbar here -->
    <div class="content">
      <div class="container-fluid">
        <style type="text/css">
          .inicio {
            background-image: url("assets/img/logo.png");
            background-repeat: no-repeat;
            background-position: 64% 40%;
          }

          .textoprincipal {
            text-align: left;
          }
        </style>
        </head>
        <!-- End Navbar -->


        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">two_wheeler</i>
                </div>
                <p class="card-category">Automaticas</p>
                <h3 class="card-title"><?php
                                        echo $resultadofinal1; ?></h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <a href="/material1/proyecto_principal/formularios/formulario_motos_automaticas.html" class="link">Automaticas</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">two_wheeler</i>
                </div>
                <p class="card-category">Semiautomáticas</p>
                <h3 class="card-title"><?php
                                        echo $resultadofinal2; ?></h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <a href="/material1/proyecto_principal/formularios/formulario_motos_semiautomaticas.html" class="link">Semiautomáticas</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">two_wheeler</i>
                </div>
                <p class="card-category">Sport</p>
                <h3 class="card-title"><?php
                                        echo $resultadofinal3; ?></h3>
              </div>
              <div class="card-footer">
                <a href="/material1/proyecto_principal/formularios/formulario_motos_sport.html" class="link">Sport</a>
                <div class="stats">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">two_wheeler</i>
                </div>
                <p class="card-category">Enduro</p>
                <h3 class="card-title"><?php
                                        echo $resultadofinal4; ?></h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <a href="/material1/proyecto_principal/formularios/formulario_motos_enduro.html" class="link">Enduro</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div style="width: 16rem;"></div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">two_wheeler</i>
                </div>
                <p class="card-category">Cruiser</p>
                <h3 class="card-title"><?php
                                        echo $resultadofinal5; ?></h3>
              </div>
              <div class="card-footer">
                <a href="/material1/proyecto_principal/formularios/formulario_motos_cruiser.html" class="link">Cruiser</a>
                <div class="stats">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">two_wheeler</i>
                </div>
                <p class="card-category">Aventura</p>
                <h3 class="card-title"><?php
                                        echo $resultadofinal6; ?></h3>
              </div>
              <div class="card-footer">
                <a href="/material1/proyecto_principal/formularios/formulario_motos_aventura.html" class="link">Aventura</a>
                <div class="stats">
                </div>
              </div>
            </div>
          </div>




          <!-- your content here -->


          <!-- your footer here -->
        </div>
        </footer>
      </div>
    </div>
    <link rel="stylesheet" type="text/css" href="../assets/css/uno.css">
    <!--   Core JS Files   -->
    <script type="text/javascript" src="./assets/js/validar.js"></script>
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="./assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="./assets/demo/demo.js"></script>
    <script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');

          $sidebar_img_container = $sidebar.find('.sidebar-background');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');

          window_width = $(window).width();

          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });

          $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
            }
          });

          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });

          $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }

              background_image = false;
            }
          });

          $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

              setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);

          });
        });
      });
    </script>



</body>

</html>