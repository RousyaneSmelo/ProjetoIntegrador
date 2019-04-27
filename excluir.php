<?php

	session_start();

	if($_SESSION['logou'] == 1) {
		$id = $_GET['id'];
		
		$servidor = mysqli_connect("localhost","root","","biblioteca");
		
		mysqli_query($servidor, "delete from livros where id = $id");
		
		header('Location: lista.php');
	}
	else {
		header('Location: index.html');
	}


?>