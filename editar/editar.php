<?php

require_once("../modelo/UsuarioModelo.php");
require_once("../controle/UsuarioControle.php");

$controle = new UsuarioControle();
$usuario = new UsuarioModelo();
$usuario->setLogin($_POST["login"]);
$usuario->setEmail($_POST["email"]);
if($_POST["senha"] == ''){
	$senha = $controle->selecionar($usuario->getEmail())->getSenha();
	$usuario->setSenha($senha);
}else{
	$usuario->setSenha(hash("sha256",$_POST["senha"]));
}

if($controle->editar($usuario)){
	header("Location: ../registros");
}else{
	echo "Erro ao atualizar o usuário!";
}

?>
