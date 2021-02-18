<?php

class Conexao {
	private $usr;
	private $pwd;
	private $dbname;
	private $host;
	private $driver;
	private $pdo;

	function __construct($conf){
		try{
			if(file_exists($conf)){
				$conf = file_get_contents($conf);
				$conf = json_decode($conf, true);
				$this->usr = $conf["usuario"];
				$this->pwd = $conf["senha"];
				$this->dbname = $conf["nome"];
				$this->host = $conf["host"];
				$this->driver = $conf["driver"];
				if($this->driver == "mysql"){
					$this->pdo = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}", $this->usr, $this->pwd);
					$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}else{
					die("SGBD incompatível!");
				}
			}else{
				die("Arquivo de configuração inexistente.");
			}
		}catch(PDOException $e){
			die("Erro na conexão com o banco.");
		}
	}

	public function fecharConexao(){
		$this->pdo = null;
	}

	public function getPDO(){
		return $this->pdo;
	}
}

?>
