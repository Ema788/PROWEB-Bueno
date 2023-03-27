<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>PROWEB | Examen</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/img_cont/Circulo_cromatico.svg.png" />
    <link rel="stylesheet" href="../examenesRecursos/stylep.css">
    <link rel="stylesheet" type="text/css" href="../examenesRecursos/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../examenesRecursos/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../examenesRecursos/responsive.css" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="./css/stylep.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <img src="../assets/img/img_cont/Circulo_cromatico.svg.png" alt class="w-px-40 h-auto rounded-circle" />
              <span class="app-brand-text demo fw-bolder ms-2">PROWEB</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Inicio</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Curso Básico</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">HTML Basic</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="./Examen1-Basci.html" class="menu-link">
                    <div data-i18n="Notifications">Examen 1</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="./Examen1-2-Basci.php" class="menu-link">
                    <div data-i18n="Connections">Examen2</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Curso Atributos -->
            <li class="menu-item ">
              <a href="HTML-Atributos.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-square-edit"></i>
                <div data-i18n="Misc">HTML Atributos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="./Examen1-Basci.html" class="menu-link">
                    <div data-i18n="Error">Examen 1</div>
                  </a>
                </li>
                <li class="menu-item ">
                  <a href="./Examen2-Atributos.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Examen 2</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Curso Atributos -->
            <li class="menu-item active open">
              <a href="HTML-Imagenes.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-photo-album"></i>
                <div data-i18n="Misc">HTML Imagenes</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="./Examen3-Imagenes.html" class="menu-link">
                    <div data-i18n="Error">Examen 1</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="./Examen3-2.php" class="menu-link">
                    <div data-i18n="Under Maintenance">Examen 2</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Curso Estilos -->
            <li class="menu-item">
              <a href="HTML-EstilosCSS.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-file-css"></i>
                <div data-i18n="Misc">HTML Estilos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li>
            
            <!-- Curso Tablas -->
            <li class="menu-item">
              <a href="HTML-Tablas.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Misc">HTML Tablas</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">MEDIA</span></li>
            
            <!-- HTML Media -->
            <li class="menu-item">
              <a href="HTML-Media.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-videos"></i>
                <div data-i18n="Basic">HTML Media</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- HTML Video -->
            <li class="menu-item">
              <a href="HTML-Video.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-video"></i>
                <div data-i18n="User interface">HTML Video</div>
              </a>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li>

            <!--HTML Audio -->
            <li class="menu-item">
              <a href="HTML-Audio.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-music "></i>
                <div data-i18n="Extended UI">HTML Audio</div>
              </a>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li>

            <!--HTML Youtube -->
            <li class="menu-item">
              <a href="HTML-Youtube.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-youtube"></i>
                <div data-i18n="Boxicons">HTML Youtube</div>
              </a>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">PROWEB</span></li>
            
            <!-- PROWEB -->
            <li class="menu-item">
              <a href="HTML-Media.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-group"></i>
                <div data-i18n="Basic">Nosotros</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="contactanos.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div data-i18n="Layouts">Contactanos</div>
              </a><br><br>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex ml-auto flex-column flex-lg-row align-items-center ">
                    <ul class="navbar-nav  ">
                      <li class="nav-item">
                        <a class="nav-link active"  href="index.html">Inicio <span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="HTML-Basci.html"> Curso </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Contactanos.html"> Contactanos </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Nosotros.html"> Nosotros </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">HTML Basico / Atributos / </span> Examen 2</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="./HTML-Basci.html"><i class="bx bxs-file-html"></i> Introducción</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./Examen3-Imagenes.html"
                        ><i class="bx bx-book-content me-1"></i> Examen 1</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="./Examen2-2-Atributos.php"
                      ><i class="bx bx-book-content me-1"></i> Examen 2</a
                      >
                    </li>
                  </ul>
                  
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="container">
                        <form method="post" action="#">
                          <div class="form-group">
                            <label for="exampleInputEmail1"><h3>Observa lo siguiente:</h3></label><br>
                            <h3>
                            <pre class="lang:default decode:true">
&lt;img src="scream.png" ?????="250" height="400"&gt;
                            </pre>
                            </h3>
                            <h3><label for="">Usa los atributos de imagen HTML para establecer el tamaño de la imagen en 250 píxeles de ancho y 400 píxeles de alto:</label></h3>
                            <input type="text" name="etiquetah1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Etiqueta">
                          </div>
                          <button type="submit" class="btn btn-primary">Enviar respuesta</button>
                        </form>
                        <br><br>
                        <?php
                          if(isset($_POST['etiquetah1'])){
                            $etiquetah1 = $_POST['etiquetah1'];
                            if($etiquetah1 == "width"){
                              echo "Respuesta correcta";
                            }else{
                              echo "Respuesta incorrecta";
                            }
                          }
                          ?>
                        </div>
                    </div>
                  </div>

                  
                </div>
              </div>
            </div>
            <div class="content-backdrop fade"></div>
          </div>

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  © PROWEB
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                </div>
              </div>
            </footer>
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script type="text/javascript" src="../examenesRecursos/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../examenesRecursos/bootstrap.js"></script>
    <script src="../examenesRecursos/questionsBasic1.js"></script>
    <script src="../examenesRecursos/script.js"></script>
  </body>
</html>
