<?php
$user = "ProfessionalProfessorAdmin";
$password = "12345";
$database = "professionalProfessor";
$table = "universidad";

try{
	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
	echo "<h1>Esto es una prueba</h1>";
	foreach($db->query("SELECT * FROM $table") as $registro) {
	echo "<h2>Universidad: ".$registro['nombre']. " Descripcion: " .$registro['descripcion']."</h2>";
	}
}catch(PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
