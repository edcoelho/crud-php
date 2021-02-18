<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<title>Início</title>
	</head>
	<body>
		<nav class="navbar navbar-dark navbar-expand-lg mb-5">
			<div class="navbar-brand">Gerenciar usuários</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarToggler">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="./" class="nav-link">Início</a></li>
					<li class="nav-item"><a href="cadastrar/" class="nav-link">Cadastrar usuário</a></li>
					<li class="nav-item"><a href="registros/" class="nav-link">Registros</a></li>
					<li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
					<?php
					if(isset($_SESSION['acesso']) && $_SESSION['acesso']){
						echo "<li class=\"nav-item\"><a href=\"login/finalizarSessao.php\" class=\"nav-link\">Sair</a></li>\n";
					}else{
						echo "<li class=\"nav-item\"><a href=\"login/\" class=\"nav-link\">Login</a></li>\n";
					}
					?>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="p-4 m-auto col-10 col-sm-8 col-md-6 col-lg-5 border rounded" style="background-color: #fff;">
				<h3 class="mb-3">Sistema de cadastro de usuários</h3>
				<p>Esse é um sistema de cadastro de usuários que realiza as quatro operações básicas de um banco de dados (CRUD).</p>
				<p>Para acessar as páginas de cadastro, gerência de registros e informações sobre o projeto utilize os botões abaixo ou, se preferir, utilize a barra de navegação.</p>
				<div class="form-row">
					<div class="col-6">
						<a href="registros/"><button class="btn w-100">Registros</button></a>
					</div>
					<div class="col-6">
						<a href="sobre.php"><button class="btn w-100">Sobre</button></a>
					</div>
				</div>
				<div class="form-row mt-3">
					<div class="col">
						<a href="cadastrar/"><button class="btn w-100">Cadastrar novo usuário</button></a>
					</div>
				</div>
			</div>
		</div>
	
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
