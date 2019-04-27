<?php

	session_start();
	
	if($_SESSION['logou'] == 1) {
		
		include "menu.php";
		
		$servidor = mysqli_connect("localhost","root","","econotech");
		
		$autor = $_POST['autor'];
		$titulo = $_POST['titulo'];
		$ano = $_POST['ano'];
		
		$cadastrou = mysqli_query($servidor, "insert into livros (autor, titulo, ano) values ('$autor','$titulo','$ano')");
		
		if($cadastrou) {
			echo "<script>alert('Cadastro realizado com sucesso!')</script>";	
		}
		else {
			echo "<script>alert('Não foi possivel realizar seu cadastro!')</script>";
		}
	}
	else {
		header('Location: index.html');
	}

?>