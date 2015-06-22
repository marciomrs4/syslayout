<?php
namespace Mrs\core;

abstract class DataBase
{
	private $user = 'root';
	private $password = 'q1w2e3mrs';
	private $tipobanco = 'mysql';
	private $database = 'stay';
	private $server =  'localhost';

	/** 
	 *@name PDO
	 *@uses conexao
	 *@example para fazer conexao
	 */
	protected $conexao;

	public function __construct()
	{
		try{
			$this->conexao = new \PDO($this->tipobanco.':host='.$this->server.';dbname='.$this->database,$this->user,$this->password,array(\PDO::ATTR_PERSISTENT => true));
			$this->conexao->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		}
		catch (\PDOException $e)
		{
			error_log("Erro ao tentar conectar no banco de dados",3,"Error_Connect");
			throw new \PDOException("ERRO: {$e->getMessage()} COD: {$e->getCode()} Arquivo {$e->getFile()}");
		}
		

	}
}