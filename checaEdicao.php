<?php 

$servidor = mysqli_connect("localhost","root","","biblioteca");

$id = $_GET['id'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$ano = $_POST['ano'];

$query = "UPDATE livros SET autor = '$autor', titulo = '$titulo', ano = '$ano' WHERE id = '$id';";

$resultado = mysqli_query($servidor, $query);

header('Location: lista.php');

















?>