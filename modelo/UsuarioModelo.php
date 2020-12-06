<?php

class UsuarioModelo{
	private $login;
	private $email;
	private $senha;

	public function getLogin(){
		return $this->login;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getSenha(){
		return $this->senha;
	}

	public function setLogin($l){
		return $this->login = $l;
	}
	public function setEmail($e){
		return $this->email = $e;
	}
	public function setSenha($s){
		return $this->senha = $s;
	}
}
	
?>
