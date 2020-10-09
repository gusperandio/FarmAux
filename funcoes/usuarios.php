<?php

Class Usuario
{
	private $pdo;
	public $msgErro = "";

	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		try 
		{

			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,
			$usuario,$senha);

		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}

		
	}

	
	public function cadastrar($nomeCad, $senhaCad)
	{
		global $pdo;
		//verificar se ja existe usuario cadastrado
		 $sql = $pdo->prepare("SELECT id_usuario FROM usuarios 
		 	WHERE nome = :nome");
		 $sql->bindValue(":nome",$nomeCad);
		 $sql->execute();
		 //rowcount contador de linhas do mysql
		 if($sql->rowCount() > 0)
		 {
		 	return false; //ja esta cadastrado
		 }
		 else
		 {

		 	//se nao tiver cadastro
		 	$sql = $pdo->prepare("INSERT INTO usuarios 
		 		(nome, senha) VALUES (:nc, :sc)");
		 	$sql->bindValue(":nc",$nomeCad);
		 	$sql->bindValue(":sc",md5($senhaCad));
		 	$sql->execute();
		 	return true; 
		 }
		

	}

	public function logar($nomeLogin, $senhalogin)
	{
		global $pdo;
		//verifica se esta cadastrado
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE
			nome = :nl AND senha = :s");
		$sql->bindValue(":nl",$nomeLogin);
		$sql->bindValue(":s",md5($senhalogin));
		$sql->execute();
		
		if($sql->rowCount() > 0)
		{
			//entra no sistema
			$dado = $sql->fetchAll();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true;
		}
		else
		{
			return  false;
		}
		
	}

		
}
