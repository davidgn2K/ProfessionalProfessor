<?php
$user = "ProfessionalProfessorAdmin";
$password = "12345";
$database = "professionalProfessor";
$tableUniversidad = "universidad";
$tableFacultad = "facultad";
$tableFacultadProfesor = "facultad_profesor";
try{
	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
} catch (PDOException $e) {
	echo "<h1>Error: ". $e->getMessage() ." </h1>";
	die();
}
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
        <a class="col-1 navbar-brand" href="./index.php">
          <img src="./images/logo_no_bg_resized.png">
        </a>
        
        <ul class="col-9 justify-content-center navbar-nav">
            <li class="mr-4 nav-item">
              <a class="nav-link" href="./index.php">Inicio</a>
            </li>
            <li class="mr-4 nav-item">
              <a class="nav-link" href="./universidades.php">Universidades</a>
            </li>
            <li class="mr-4 nav-item active">
              <a class="nav-link" href="#">Facultades<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./profesores.php">Profesores</a>
            </li>
        </ul>
        <div class="col-2">
          <button class="button-23" role="button">Iniciar Sesi??n</button>
        </div>
      </nav>
      <!-- Navbar end -->

      <div class="container-fluid justify-content-center contenido">
        <div class="row">
          <div class="col-5">
          </div>
          <div class="col-3 mt-4">
            <p>Facultades</p>
          </div>
          <div class="col-4">
          </div>
        </div>  
      </div> 


      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Facultad&nbsp;&nbsp;&nbsp;<i class="fas fa-graduation-cap"></i></th>
            <th scope="col">Universidad&nbsp;&nbsp;&nbsp;<i class="fas fa-university"></i></th>
            <th scope="col">Descripci??n&nbsp;&nbsp;&nbsp;<i class="fas fa-align-justify"></i></th>
            <th scope="col">No. Profesores&nbsp;&nbsp;&nbsp;<i class="fas fa-user-tie"></i></th>
          </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($db->query("SELECT * FROM $tableFacultad") as $registro) {
            $temp = $registro['id'];
            echo "<tr>";
                echo "<th scope='row'>".$registro['id']."</th>";
                echo "<td>".$registro['nombre']."</td>";
                foreach ($db->query("SELECT $tableUniversidad.nombre as nom FROM $tableFacultad
                        INNER JOIN $tableUniversidad ON $tableFacultad.idUniversidad = $tableUniversidad.id 
                        WHERE $tableFacultad.id=$temp") as $registro2){
                    echo "<td>".$registro2['nom']."</td>"; 
                    }

                echo "<td>".$registro['descripcion']."</td>";

                foreach ($db->query("SELECT COUNT(idFacultad) FROM $tableFacultadProfesor  
                        WHERE idFacultad=$temp") as $registro2){
                        echo "<td>".$registro2['COUNT(idFacultad)']."</td>"; 
                    }
                echo "</tr>";
	        } ?>
        </tbody>
      </table>

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
          ?? 2023 Copyright
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