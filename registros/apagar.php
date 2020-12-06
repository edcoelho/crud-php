<?php

require_once("../controle/UsuarioControle.php");

$controle = new UsuarioControle();
$email = $_GET["email"];

if($controle->apagar($email)){
	header("Location: ./");
}else{
	echo "Erro ao apagar usuário!";
}

?>
