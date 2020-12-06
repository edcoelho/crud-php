<?php

require_once("../modelo/UsuarioModelo.php");
require_once("../controle/UsuarioControle.php");

$usuario = new UsuarioModelo();

$usuario->setLogin($_POST["login"]);
$usuario->setEmail($_POST["email"]);
$usuario->setSenha(hash("sha256",$_POST["senha"]));

$controle = new UsuarioControle();
if($controle->inserir($usuario)){
	header("Location: ../index.html");
}else{
	echo "Erro no cadastro do usuário!";
}

?>
