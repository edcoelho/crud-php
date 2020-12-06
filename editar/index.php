<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="../visual/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../visual/css/style.css" />
		<title>Editar registro</title>
	</head>
	<body>
		<nav class="navbar navbar-dark navbar-expand-lg mb-5">
			<div class="navbar-brand">Gerenciar usuários</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarToggler">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="../" class="nav-link">Início</a></li>
					<li class="nav-item"><a href="../cadastrar" class="nav-link">Cadastrar usuário</a></li>
					<li class="nav-item active"><a href="../registros" class="nav-link">Registros</a></li>
					<li class="nav-item"><a href="../Sobre.html" class="nav-link">Sobre</a></li>
				</ul>
			</div>
		</nav>
<?php
if(isset($_GET["email"])){
	require_once("../controle/UsuarioControle.php");
	$controle = new UsuarioControle();
	$usuario = $controle->selecionar($_GET["email"]);

	if($usuario != null){
		echo "\t\t<div class=\"container\">
			<div class=\"col-10 col-sm-8 col-md-6 col-lg-5 p-4 m-auto border rounded\" style=\"background: #fff;\">
				<h3 class=\"mb-3\">Editar usuário</h3>
				<form action=\"editar.php\" method=\"post\">
					<div class=\"form-group\">
						<label for=\"login\">Login</label>
						<input type=\"text\" id=\"login\" name=\"login\" value=\"{$usuario->getLogin()}\" required class=\"form-control\"/>
					</div>

					<div class=\"form-group\">
						<label for=\"email\">Email</label>
						<input type=\"email\" id=\"email\" name=\"email\" value=\"{$usuario->getEmail()}\" readonly class=\"form-control\"/>
					</div>

					<div class=\"form-group\">
						<label for=\"senha\">Senha</label>
						<input type=\"password\" id=\"senha\" name=\"senha\" class=\"form-control\"/>
					</div>

					<input type=\"submit\" id=\"editar\" name=\"editar\" value=\"Editar\" class=\"btn\"/>
				</form>
			</div>
		</div>
			<script src=\"../js/popper.min.js\"></script>
			<script src=\"../js/jquery.min.js\"></script>
			<script src=\"../js/bootstrap.min.js\"></script>
";
	}else{
		header("Location: ../");
	}
}else{
	header("Location: ../");
}
?>
	</body>
</html>
