<?php

class AdminModelo{
	private $usuario;
	private $senha;

	public function getUsuario(){
		return $this->usuario;
	}
	public function setUsuario($u){
		$this->usuario = $u;
	}

	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($s){
		$this->senha = $s;
	}
}

?>
