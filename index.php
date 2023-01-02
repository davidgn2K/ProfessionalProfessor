<?php

$host = "localhost";
$user = "ProfessionalProfessorAdmin";
$password = "12345";
$database = "professionalProfessor";
$tablaFacultad = "facultad";

 // servername => localhost
        // username => root
        // password => 12345
        // database name => professionalProfessor
$conn = mysqli_connect($host, $user, "12345", $database);

try{
	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
} catch (PDOException $e) {
	echo "<h1>Error: ". $e->getMessage() ." </h1>";
	die();
}

// Check connection
if($conn === false){
  die("ERROR: Could not connect. "
      . mysqli_connect_error());
}

$degree =  $_REQUEST['form_degree'];
$name = $_REQUEST['form_name'];
$lname =  $_REQUEST['form_lname'];
$mname = $_REQUEST['form_mname'];
$license = $_REQUEST['form_license'];
$university = $_REQUEST['form_university'];
$faculty = $_REQUEST['form_faculty'];
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

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  </svg>
  
  <?php
  if (isset($_POST['action'])) {
    $sql = "INSERT INTO profesor (nombre, cedulaProfesional, grado, paterno, materno) VALUES($name, $license, $degree, $lname, $mname)" ;
    if(mysqli_query($conn, $sql)){

      echo '<div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        Operación Exitosa. La información ha sido insertada en la base de datos.
      </div>
    </div> 

    
    setTimeout(function() {
      window.location.reload();
  }, 2500);';

  } else{
      echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <div>
        Error. La información no ha podido ser insertada en la base de datos. Intente de nuevo.
      </div>
    </div>

    setTimeout(function() {
      window.location.reload();
    }, 2500)';
  }
   
  // Close connection
  mysqli_close($conn);
  }
        ?>
        
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

      <form action="" class="mx-3 my-5">
        <div class="form-row">

          <div class="col-md-3 mb-3">
            <label class="mr-sm-2" for="inlineFormCustomSelect01">Grado</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect01" name="form_degree">
              <option value="1" selected>Licenciado</option>
              <option value="2">Maestro</option>
              <option value="3">Doctor</option>
              <option value="4">M.I.</option>
            </select>
          </div>

          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Nombre</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Alberto" name="form_name" required>
          </div>

          <div class="col-md-3 mb-3">
            <label for="validationDefault02">Apellido Paterno</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Arenas" name="form_lname" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault03">Apellido Materno</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="Islas" name="form_mname">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationDefault04">Cédula Profesional</label>
            <input type="text" class="form-control" id="validationDefault04" placeholder="23456789" name="form_license" required>
          </div>
          <div class="col-md-5 mb-3">
            <label class="mr-sm-2" for="inlineFormCustomSelect02">Universidad</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect02" name="form_university">
              <option value="1" selected>Universidad Nacional Autónoma de México</option>
              <option value="2">Instituto Tecnológico de Estudios Superiores de Monterrey</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label class="mr-sm-2" for="inlineFormCustomSelect03">Facultad</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect03" name="form_faculty">
              <?php
                foreach ( $db->query ("SELECT id, nombre FROM $tablaFacultad 
                                  ") as $registro) {
                    
                  echo "<option value=".$registro['id'].">".$registro['nombre']."</option>";

                }  
              ?>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6 mt-5">
            <button class="button-27" type="submit" name="submitButton">Confirmar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i> </button>
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
