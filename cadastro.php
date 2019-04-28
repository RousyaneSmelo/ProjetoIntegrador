<!DOCTYPE html>
<html>
<head>
        <title>Sessão cliente - Cadastro</title>
        
        <script src="js/script.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link type="text/css" rel="stylesheet" href="main.css">	

</head>

<body>

<?php


        
            <header>
                <nav>
                    <ul>
                         <li><a href="index.html">Home</a></li>
			                   <li><a href="cadastro.php">Cadastro</a></li>
                          <li><a href="login.html">Login</a></li>
                    </ul>
                </nav>
            </header>


	<section class="westworld">

 <div style="overflow:scroll;height:550px;width:100%;overflow:auto">

	
	
<form action='checaCadastro.php' method='post'>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Email" name="email" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="empresa">Nome Empresa</label>
      <input type="text" class="form-control" id="empresa" placeholder="Empresa" name="empresa" > 
    </div>
    <div class="form-group col-md-6">
      <label for="cnpj">CNPJ</label>
      <input type="text" class="form-control" id="cnpj" placeholder="Cnpj" name="cnpj" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Responsavel">Responsavel</label>
      <input type="text" class="form-control" id="responsavel" placeholder="Responsavel" name="dono	" >
    </div>
    <div class="form-group col-md-6">
      <label for="telefone">Telefone</label>
      <input type="text" class="form-control" id="telefone" placeholder="digite numeros" name="telefone">
    </div>
  </div>



  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" id="endereco" placeholder="Rua Exemplo , nº 0" name="endereco">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" id="cidade" placeholder="cidade"  name="cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="Estado">Estado</label>
      <select id="Estado" class="form-control">
        <option selected>Escolher...</option>
        <option>PB</option>
	<option>PE</option>
	<option>CE</option>

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="CEP">CEP</label>
      <input type="text" class="form-control" id="CEP" placeholder="cep" name="cep">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
     
      </label>
    </div>
  </div>
  <button type="button" class="btn btn-danger">Enviar</button>
           
 </div>

 </select>

           
</form>

</section>

?>



<div class="rodape"> 

<center><p> Copyright 2019 by Econotech </p></center>

</di>
       
</body>

</html>