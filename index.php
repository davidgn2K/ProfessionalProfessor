<?php

$user = "ProfessionalProfessorAdmin";
$password = "12345";
$database = "professionalProfessor";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Montserrat Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!-- CSS File -->
    <link rel="stylesheet" href="./css/index.css">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/95d6309765.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <title>Professional Professor</title>
  </head>
  <body>

      <!-- Navbar start -->
      <nav class="navbar navbar-expand-md navbar-light border-bottom border-dark" style="background-color: #FFFFFF;">
        <a class="col-1 navbar-brand" href="#">
          <img src="./images/logo_no_bg_resized.png">
        </a>
        
        <ul class="col-9 justify-content-center navbar-nav">
            <li class="mr-4 nav-item active">
              <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="mr-4 nav-item">
              <a class="nav-link" href="./universidades.php">Universidades</a>
            </li>
            <li class="mr-4 nav-item">
              <a class="nav-link" href="./facultades.php">Facultades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./profesores.php">Profesores</a>
            </li>
        </ul>
        <div class="col-2">
          <button class="button-23" role="button">Iniciar Sesión</button>
        </div>
      </nav>
      <!-- Navbar end -->

      <div class="container-fluid justify-content-center contenido">
        <div class="row">
          <div class="col-5">
          </div>
          <div class="col-3 mt-4">
            <p>Añadir un profesor</p>
          </div>
          <div class="col-4">
          </div>
        </div>  
      </div> 

      <form class="mx-3 my-5">
        <div class="form-row">

          <div class="col-md-3 mb-3">
            <label class="mr-sm-2" for="inlineFormCustomSelect01">Grado</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect01">
              <option value="1" selected>Licenciado</option>
              <option value="2">Maestro</option>
              <option value="3">Doctor</option>
              <option value="4">M.I.</option>
            </select>
          </div>

          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Nombre</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Alberto" value="" required>
          </div>

          <div class="col-md-3 mb-3">
            <label for="validationDefault02">Apellido Paterno</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Arenas" value="" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault03">Apellido Materno</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="Islas" value="">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationDefault04">Cédula Profesional</label>
            <input type="text" class="form-control" id="validationDefault04" placeholder="23456789" required>
          </div>
          <div class="col-md-5 mb-3">
            <label class="mr-sm-2" for="inlineFormCustomSelect02">Universidad</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect02">
              <option value="1" selected>Universidad Nacional Autónoma de México</option>
              <option value="2">Instituto Tecnológico de Estudios Superiores de Monterrey</option>
              <option value="3">Instituto Tecnológico Autónomo de México</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label class="mr-sm-2" for="inlineFormCustomSelect03">Facultad</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect03">
              <option value="1" selected>Op1</option>
              <option value="2">Op2</option>
              <option value="3">Op3</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6 mt-5">
            <button class="button-27" type="submit">Confirmar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i> </button>
          </div>
          <div class="col-md-3">
          </div>
        </div>
      </form>

      <footer class="text-center text-white fixed-bottom border-top border-dark" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-linkedin"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center text-dark p-1 border-top border-secondary" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright
        </div>
        <!-- Copyright -->
      </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
