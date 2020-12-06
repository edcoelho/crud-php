<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="../visual/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../visual/css/style.css" />
		<title>Registros</title>
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
					<li class="nav-item active"><a href="./" class="nav-link">Registros</a></li>
					<li class="nav-item"><a href="../Sobre.html" class="nav-link">Sobre</a></li>
				</ul>
			</div>
		</nav>
<?php 
require_once("../controle/UsuarioControle.php");
$controle = new UsuarioControle();
$lista = $controle->selecionarTudo();

if($lista != null){
	echo "\t\t<div class=\"container\">
			<div class=\"table-responsive\">
				<table class=\"table table-striped table-borderless\">
					<thead>
						<tr>
							<th>Login</th>
							<th>Email</th>
							<th>Senha</th>
							<th colspan=\"2\">Opções</th>
						</tr>
					</thead>
					<tbody>\n";
	foreach($lista as $i){
		echo "\t\t\t\t\t\t<tr>
							<td>{$i->getLogin()}</td>
							<td>{$i->getEmail()}</td>
							<td>{$i->getSenha()}</td>
							<td><a href=\"apagar.php?email={$i->getEmail()}\" title=\"Apagar\"><img src=\"../visual/icons/trash.svg\" alt=\"Apagar\" height=\"20px\"/></a></td>
							<td><a href=\"../editar/?email={$i->getEmail()}\" title=\"Editar\"><img src=\"../visual/icons/edit.svg\" alt=\"Editar\" height=\"20px\"/></a></td>
						</tr>\n";
	}
		echo "\t\t\t\t\t</tbody>
				</table>\n
			</div>
		</div>
		<script src=\"../js/jquery.min.js\"></script>
		<script src=\"../js/popper.min.js\"></script>
		<script src=\"../js/bootstrap.js\"></script>
";
}
?>
	</body>
</html>
