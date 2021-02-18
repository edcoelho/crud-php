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
		<title>Sobre</title>
	</head>
	<body>
		<nav class="navbar navbar-dark navbar-expand-lg mb-5">
			<div class="navbar-brand">Gerenciar usuários</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarToggler">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="./" class="nav-link">Início</a></li>
					<li class="nav-item"><a href="cadastrar/" class="nav-link">Cadastrar usuário</a></li>
					<li class="nav-item"><a href="registros/" class="nav-link">Registros</a></li>
					<li class="nav-item active"><a href="" class="nav-link">Sobre</a></li>
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

		<div class="container mb-5">
			<div class="p-4 m-auto col-10 col-sm-8 col-md-6 col-lg-5 border rounded" style="background-color: #fff;">
				<h3 class="mb-2">Sobre o projeto</h3>
				<p>A versão 1.0 desse projeto foi feita para uma avaliação escolar da disciplina de Programação Web 2 (PW 2). As versões posteriores são aprimoramentos feitos para exercitar as habilidades do autor.</p>
				<p>Trata-se de um sistema de cadastro de usuários que realiza as quatro operações básicas de um banco de dados (CRUD).</p>
				<p>Para esse projeto eu utilizei o SGBD MySQL e PHP para o back-end. O sistema irá armazenar as senhas criptografadas com o hash SHA-256. Para compor o front-end eu utilizei o framework <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>, <a href="https://jquery.com/" target="_blank">JQuery</a> e ícones do <a href="https://fontawesome.com" target="_blank">Font Awesome</a>.</p>
				<h3 class="mb-2">O que há de novo</h3>
				<p><strong>Login para Admins:</strong> Agora apenas administradores cadastrados no banco de dados podem acessar e manipular registros, além de cadastrar novos registros.</p>
				<p><strong>JSON:</strong> Agora o arquivo de configuração do banco de dados está salvo no formato JSON.</p><hr>
				<span>Autor: Edson Coelho</span><br/>
				<span>Versão: 2.0</span>
			</div>
		</div>
	
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
