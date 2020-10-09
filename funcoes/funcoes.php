<?php 
	
	Class funcoes{

		private $pdo;

		public function __construct($nome, $host, $user, $senha)
		{	
			try 
			{

			$this->pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$user,$senha);

			} 
			catch (PDOException $e) 
			{
				echo "Erro com banco de dados".$e->getMessage();
				exit();
			}
			catch (Exception $e) 
			{
				echo "Erro".$e->getMessage();
				exit();
			}
			
		}


		public function BuscarDadosAlta(){

		$res = array();	
		
		$cmd = $this->pdo->query("SELECT * FROM alta ORDER BY id_solicitacao_alta DESC LIMIT 4");
		
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		
		return $res;
	

		}	

		public function BuscarDadosFalta(){

		$res = array();	

		$cmd = $this->pdo->query("SELECT * FROM falta ORDER BY id_solicitacao_falta DESC LIMIT 5");

		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);

		return $res;

		}

		public function BuscarDadosHora(){

		$res = array();	

		$cmd = $this->pdo->query("SELECT * FROM horario ORDER BY id_solicitacao_hora DESC LIMIT 5");

		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);

		return $res;

		}

		public function BuscarDadosDev(){

		$res = array();	

		$cmd = $this->pdo->query("SELECT * FROM devolucao ORDER BY id_solicitacao_dev DESC LIMIT 4");

		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);

		return $res;

		}

		public function ExcluirAlta($idAlta){

		$cmd = $this->pdo->prepare("DELETE FROM alta WHERE id_solicitacao_alta = :ida");
		$cmd -> bindValue(":ida",($idAlta));
		$cmd -> execute();

		}

		public function ExcluirFalta($idFalta){

		$cmd = $this->pdo->prepare("DELETE FROM falta WHERE id_solicitacao_falta = :id");
		$cmd -> bindValue(":id",($idFalta));
		$cmd -> execute();

		}

		public function ExcluirHorario($idHorario){

		$cmd = $this->pdo->prepare("DELETE FROM horario WHERE id_solicitacao_hora = :id");
		$cmd -> bindValue(":id",($idHorario));
		$cmd -> execute();

		}

		public function ExcluirDev($idDev){

		$cmd = $this->pdo->prepare("DELETE FROM devolucao WHERE id_solicitacao_dev = :id");
		$cmd -> bindValue(":id",($idDev));
		$cmd -> execute();

		}

	}
