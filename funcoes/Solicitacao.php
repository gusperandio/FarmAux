<?php

Class Solicitacao
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
	

	public function InserirAlta($nome_pct_alta, $nameIntAntiga, $nameIntDestino, $nameResp,$horaAtualAlta)
	{
		global $pdo;
		
		 	//Inserindo a solicitação de alta do paciente
		 	$sql = $pdo->prepare("INSERT INTO alta 
		 		(nome_pctAlta, nome_IntAngtiga, nome_Intnova, nome_respAlta, hora_atual_alta) VALUES (:npcta, :nia, :nid, :nra, :haa)");
		 	$sql->bindValue(":haa",($horaAtualAlta));
		 	$sql->bindValue(":npcta",($nome_pct_alta));
		 	$sql->bindValue(":nia",($nameIntAntiga));
		 	$sql->bindValue(":nid",($nameIntDestino));
		 	$sql->bindValue(":nra",($nameResp));
		 	$sql->execute();
		 	return true; 
	}

	public function InserirHorario($nome_pct_horario, $nameMedHorario, $horaantiga, $horanova, $nameResp,$horaAtualHorario)
	{
		global $pdo;
		
		 	//Inserindo a solicitação de alteracao de horario do paciente
		 	$sql = $pdo->prepare("INSERT INTO horario
		 		(nome_pct_hora, nome_med_hora, hour_med_ant, hour_med_novo, nome_resp_hora, hora_atual_horario) VALUES (:npcth, :nmh, :ha, :hv, :nrsph, :hah)");
		 	$sql->bindValue(":hah",($horaAtualHorario));
		 	$sql->bindValue(":npcth",($nome_pct_horario));
		 	$sql->bindValue(":nmh",($nameMedHorario));
		 	$sql->bindValue(":ha",($horaantiga));
		 	$sql->bindValue(":hv",($horanova));
		 	$sql->bindValue(":nrsph",($nameResp));
		 	$sql->execute();
		 	return true; 
	}

	public function InserirFalta($nome_pct_falta, $namemedFalta, $horamedFalta, $nameRespFalta,$horaAtualFalta)
	{
		global $pdo;
		
		 	//Inserindo a solicitação de falta de medicação do paciente
		 	$sql = $pdo->prepare("INSERT INTO falta 
		 		(nome_pct_falta, nome_med_falta, hour_med_falta, nome_resp_falta, hora_atual_falta) VALUES (:npctf, :nmf, :hmf, :nraf, :haf)");
		 	$sql->bindValue(":haf",($horaAtualFalta));
		 	$sql->bindValue(":npctf",($nome_pct_falta));
		 	$sql->bindValue(":nmf",($namemedFalta));
		 	$sql->bindValue(":hmf",($horamedFalta));
		 	$sql->bindValue(":nraf",($nameRespFalta));
		 	$sql->execute();
		 	return true; 
	}

	public function InserirDevolucao($namePctdev, $nameMeddev, $nameRespDev, $MessageDev, $horaAtualDev)
	{
		global $pdo;
		
		 	//Inserindo a solicitação de devolucão de medicação do paciente
		 	$sql = $pdo->prepare("INSERT INTO devolucao 
		 		(nome_pct_dev, nome_med_dev, nome_resp_dev, motivo_dev, hora_atual_dev) VALUES (:npctd, :nmd, :nrd, :md, :had)");
		 	$sql->bindValue(":had",($horaAtualDev));
		 	$sql->bindValue(":npctd",($namePctdev));
		 	$sql->bindValue(":nmd",($nameMeddev));
		 	$sql->bindValue(":nrd",($nameRespDev));
		 	$sql->bindValue(":md",($MessageDev));
		 	$sql->execute();
		 	return true; 
	}

	
		
}

?>
