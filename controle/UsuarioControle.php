<?php
require_once("../controle/Conexao.php");
require_once("../modelo/UsuarioModelo.php");

class UsuarioControle {
	public function inserir($usuario){
		
		try{
			if(get_class($usuario) == "UsuarioModelo"){
				$conexao = new Conexao("../controle/db.ini");
				$sql = "insert into usuarios (login, email, senha) values (:l, :e, :s);";
				$comando = $conexao->getPDO()->prepare($sql);
				$login = $usuario->getLogin();
				$email = $usuario->getEmail();
				$senha = $usuario->getSenha();
				$comando->bindParam("l", $login);
				$comando->bindParam("e", $email);
				$comando->bindParam("s", $senha);

				if($comando->execute()){
					$conexao->fecharConexao();
					return true;
				}else{
					$conexao->fecharConexao();
					return false;
				}
			}else{
				return false;
			}
		}catch(PDOException $e){
			die("Erro ao inserir usuário: {$e->getMessage()}");
		}
	}

	public function apagar($email){
		try{
			$conexao = new Conexao("../controle/db.ini");
			$sql = "delete from usuarios where email=:e;";
			$comando = $conexao->getPDO()->prepare($sql);
			$comando->bindParam("e", $email);

			if($comando->execute()){
				$conexao->fecharConexao();
				return true;
			}else{
				$conexao->fecharConexao();
				return false;
			}
		}catch(PDOException $e){
			die("Erro ao apagar o registro: {$e->getMessage()}");
		}
	}

	public function selecionar($email){
		try{
			$conexao = new Conexao("../controle/db.ini");
			$sql = "select * from usuarios where email=:e;";
			$comando = $conexao->getPDO()->prepare($sql);
			$comando->bindParam("e", $email);
			$comando->setFetchMode(PDO::FETCH_CLASS, "UsuarioModelo");
			if($comando->execute()){
				$usuario = $comando->fetch();
				$conexao->fecharConexao();
				return $usuario;
			}else{
				$conexao->fecharConexao();
				return null;
			}
		}catch(PDOException $e){
			die("Erro ao selecionar o registro: {$e->getMessage()}");
		}
	}

	public function selecionarTudo(){
		try{
			$conexao = new Conexao("../controle/db.ini");
			$sql = "select * from usuarios;";
			$comando = $conexao->getPDO()->prepare($sql);
			if($comando->execute()){
				$lista = $comando->fetchAll(PDO::FETCH_CLASS, "UsuarioModelo");
				$conexao->fecharConexao();
				return $lista;
			}else{
				$conexao->fecharConexao();
				return null;
			}
		}catch(PDOException $e){
			die("Erro ao carregar registros: {$e->getMessage()}");
		}
	}

	public function editar($usuario){
		try{
			if(get_class($usuario) == "UsuarioModelo"){
				$conexao = new Conexao("../controle/db.ini");
				$sql = "update usuarios set login=:l, senha=:s where email=:e;";
				$comando = $conexao->getPDO()->prepare($sql);
				$login = $usuario->getLogin();
				$email = $usuario->getEmail();
				$senha = $usuario->getSenha();
				$comando->bindParam("l", $login);
				$comando->bindParam("e", $email);
				$comando->bindParam("s", $senha);
				
				if($comando->execute()){
					$conexao->fecharConexao();
					return true;
				}else{
					$conexao->fecharConexao();
					return false;
				}
			}else{
				return false;
			}
		}catch(PDOException $e){
			die("Erro ao atualizar o registro: {$e->getMessage()}");
		}
	}
}

?>
