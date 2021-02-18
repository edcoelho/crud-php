<?php
require_once("../modelo/AdminModelo.php");
require_once("../controle/AdminControle.php");

$controle = new AdminControle();
if($controle->verificarExistencia($_POST["usuarioLogin"])){
	$admin = $controle->selecionar($_POST["usuarioLogin"]);

	if($admin->getSenha() == hash("sha256", $_POST["senhaLogin"])){
		session_start();
		$_SESSION['acesso'] = true;
		echo true;
	}else{
		echo "Senha incorreta!";
	}
}else{
	echo "Admin não existe!";
}
?>
