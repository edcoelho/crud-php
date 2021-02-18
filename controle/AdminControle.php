<?php
require_once("../controle/Conexao.php");

class AdminControle{
	public function verificarExistencia($usuarioAdmin){
		try{
			$conexao = new Conexao("../controle/db.json");

			$sql = "SELECT EXISTS(select * from admins where usuario=:u);";
			$comando = $conexao->getPDO()->prepare($sql);
			$comando->bindParam("u", $usuarioAdmin);

			if($comando->execute()){
				$existe = $comando->fetch(PDO::FETCH_NUM);
				$conexao->fecharConexao();
				return $existe[0];
			}else{
				die("Erro na verificação de existência.");
			}
		}catch(PDOException $e){
			die("Erro ao verificar existência de admin: {$e->getMessage()}");
		}
	}

	public function selecionar($usuarioAdmin){
		try{
			$conexao = new Conexao("../controle/db.json");

			$sql = "SELECT * FROM admins WHERE usuario=:u";
			$comando = $conexao->getPDO()->prepare($sql);
			$comando->bindParam('u', $usuarioAdmin);
			$comando->setFetchMode(PDO::FETCH_CLASS, "AdminModelo");

			if($comando->execute()){
				$admin = $comando->fetch();
				$conexao->fecharConexao();
				return $admin;
			}else{
				$conexao->fecharConexao();
				return null;
			}
		}catch(PDOException $e){
			die("Erro ao selecionar registro de admin: {$e->getMessage()}");
		}
	}
}

?>
