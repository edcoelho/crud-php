<?php
session_start();
if(isset($_SESSION['acesso']) && $_SESSION['acesso']){
	echo '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Cadastrar novo usuário</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
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
					<li class="nav-item active"><a href="./" class="nav-link">Cadastrar usuário</a></li>
					<li class="nav-item"><a href="../registros/" class="nav-link">Registros</a></li>
					<li class="nav-item"><a href="../sobre.php" class="nav-link">Sobre</a></li>
					<li class="nav-item"><a href="../login/finalizarSessao.php" class="nav-link">Sair</a></li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="col-10 col-sm-8 col-md-6 col-lg-5 p-4 m-auto border rounded" style="background: #fff;">
				<h3 class="mb-3">Cadastrar usuário</h3>
				<form action="inserir.php" method="post">
					<div class="form-group">
						<label for="login">Login</label>
						<input type="text" id="login" name="login" required class="form-control"/>
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" required placeholder="exemplo@exemplo.com" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" id="senha" name="senha" required class="form-control"/>
					</div>
				
					<input type="submit" value="Cadastrar" id="cadastrar" class="btn" />
				</form>
			</div>
		</div>
		<script src="../js/jquery.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
</html>';
}else{
	header("Location: ../login/");
}
?>
