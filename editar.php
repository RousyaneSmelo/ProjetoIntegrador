<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar | Biblioteca</title>
	
	<link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
	


<?php
	$id = $_GET['id'];
	$servidor = mysqli_connect("localhost","root","","biblioteca");
	$livros = mysqli_query($servidor, "select * from livros where id = $id");
	while($livro = mysqli_fetch_array($livros))
	{
		echo "
		<form action='checaEdicao.php?id=$id' method='post'>
			<label>Titulo: </label><input type='text' name='titulo' value='".$livro['titulo']."'><br />
			<label>Autor: </label><input type='text' name='autor' value='".$livro['autor']."'><br />
			<label>Ano:</label> <input type='text' name='ano' value='".$livro['ano']."'><br />
			<br><button class='botao2'>Editar Livro</button>
		</form>
		<br />
	<a id=\"voltar\" href=lista.php><button class=\"botao\">Voltar</button></a>
		";
	}	
?>

</body>
</html>