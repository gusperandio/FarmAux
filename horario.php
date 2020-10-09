<?php
	require_once '.\funcoes\Solicitacao.php';
	$u = new Solicitacao
?> 
<html lang="pt-br">
<head>
	<title>Horário - FarmAux</title>
	<meta charset="utf-8">
	<link rel="icon" href="../FarmAux/imagens/Enfermagem.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="arquivo.css">

</head>
<body class="fundoInicial ">
	<a href="../FarmAux/Enfermagem.html">
	<button class="buton button2 Borda Seletor" style="font-weight: bold;"> 
		<img src="../FarmAux/imagens/voltar.png" style="width: 30px; height: 30px">
	</button></a>


	<div id="Anuncio">
	</div>
		<div id="TextSemOp" class="Seletor">
		<p style="color: white; font-size: 18px">Este formulário é usado para informar alteração de horário de devida medicação na prescrição do paciente.
		<br>
		<br>
		<span style="text-decoration: underline;">	
		Todas as informações serão passadas para a farmácia de manipulação.</span></p>
	</div>

	

	<div id="centro">
		<div class="formulario Seletor">
			<div id="Icon" class="Seletor">
				<img src="../FarmAux/imagens/horario.png" style="width: 50px; height: 50px;">
			</div>

				<div id="TituloForm" class="Seletor"><center><p>Alteração de Horário</p></center></div>

				<div style="font-family: Arial, Helvetica, san-serif">

				<form class="form" method="POST">

				<b style="margin-left: 15px">Nome Paciente</b>
				<input class="field" name="nameHorario" style="text-transform: uppercase;" autocomplete="off">	

				<b style="margin-left: 15px">Nome Medicação</b>
				<select name="nameMedHorario" class="field" style="margin-right: 350px;">

				<option value="ACICLOVIR">ACICLOVIR</option>
				<option value="ACIDO ASCORBICO">ACIDO ASCÓRBICO</option>
				<option value="AMICACINA">AMICACINA</option>
				<option value="AMINOFILINA">AMINOFILINA</option>
				<option value="AMOXACILINA">AMOXACILINA</option>
				<option value="AMPICILINA">AMPICILINA</option>
				<option value="ATROPINA">ATROPINA</option>
				<option value="AZITROMICINA">AZITROMICINA</option>
				<option value="BENZIPENICILINA">BENZIPENICILINA</option>
				<option value="BETAMETASONA">BETAMETASONA</option>
				<option value="BROMOPRIDA">BROMOPRIDA</option>
				<option value="BUSCOPAN">BUSCOPAN</option>
				<option value="CAFEINA">CAFEÍNA</option>
				<option value="CEFAZOLINA">CEFAZOLINA</option>
				<option value="CEFEPIMA">CEFEPIMA</option>
				<option value="CEFOTAXIMA">CEFOTAXIMA</option>
				<option value="CEFTAZIDIMA">CEFTAZIDIMA</option>
				<option value="CEFTRIAXONA">CEFTRIAXONA</option>
				<option value="CEFUROXIMA">CEFUROXIMA</option>
				<option value="CETOPROFENO">CETOPROFENO</option>
				<option value="CIPROFLOXACINO">CIPROFLOXACINO</option>
				<option value="CLARITROMICINA">CLARITROMICINA</option>
				<option value="CLINDAMICINA">CLINDAMICINA</option>
				<option value="CLORPROMAZINA">CLORPROMAZINA</option>
				<option value="COMPLEXO B">COMPLEXO B</option>
				<option value="DESLANOSIDO">DESLANOSIDO</option>
				<option value="DEXAMETASONA">DEXAMETASONA</option>
				<option value="DIFENIDRAMIM">DIFENIDRAMIM</option>
				<option value="DIPIRONA">DIPIRONA</option>
				<option value="DRAMIM/DIMENIDRATO">DRAMIM/DIMENIDRATO</option>
				<option value="ERTAPENEM">ERTAPENEM</option>
				<option value="FENITOINA">FENITOINA</option>
				<option value="FENOBARBITAL">FENOBARBITAL</option>
				<option value="FERRO III">FERRO III</option>
				<option value="FITOMENADIONA">FITOMENADIONA</option>
				<option value="FLUCONAZOL">FLUCONAZOL</option>
				<option value="FUROSEMIDA">FUROSEMIDA</option>
				<option value="GENTAMICINA">GENTAMICINA</option>
				<option value="HALOPERIDOL">HALOPERIDOL</option>
				<option value="HEPARINA">HEPARINA</option>
				<option value="HIDROCORTISONA">HIDROCORTISONA</option>
				<option value="IMIPENEM">IMIPENEM</option>
				<option value="LACOSAMIDA">LACOSAMIDA</option>
				<option value="LEVOFLOXACINO">LEVOFLOXACINO</option>
				<option value="LINEZOLIDA">LINEZOLIDA</option>
				<option value="MEROPENEM">MEROPENEM</option>
				<option value="METILERGOMETRINA">METILERGOMETRINA</option>
				<option value="METILPREDINISOLONA">METILPREDINISOLONA</option>
				<option value="METOCLOPRAMIDA">METOCLOPRAMIDA</option>
				<option value="METRONIDAZOL">METRONIDAZOL</option>
				<option value="MORFINA">MORFINA</option>
				<option value="NALBUFINA">NALBUFINA</option>
				<option value="NEOSTIGMINA">NEOSTIGMINA</option>
				<option value="OMEPRAZOL">OMEPRAZOL</option>
				<option value="ONDASETRONA">ONDASETRONA</option>
				<option value="OXACILINA">OXACILINA</option>
				<option value="PARECOXIBE">PARECOXIBE</option>
				<option value="PIPERACILINA">PIPERACILINA</option>
				<option value="POLOMIXINA B">POLOMIXINA B</option>
				<option value="PROMETAZINA">PROMETAZINA</option>
				<option value="PROTAMINA">PROTAMINA</option>
				<option value="RANITIDINA">RANITIDINA</option>
				<option value="SULBACTAM AMPICILINA">SULBACTAM AMPICILINA</option>
				<option value="SULFAMETOXAZOL">SULFAMETOXAZOL</option>
				<option value="TEICOPLANINA">TEICOPLANINA</option>
				<option value="TIAMINA">TIAMINA</option>
				<option value="TIGECICLINA">TIGECICLINA</option>
				<option value="TRAMADOL">TRAMADOL</option>
				<option value="TRANEXAMICO">TRANEXÂMICO</option>
				<option value="VALPROATO DE SODIO">VALPROATO DE SÓDIO</option>
				<option value="VANCOMICINA">VANCOMICINA</option>
  				</select>

  					<div style="display: inline-flex;">

  						<b style="margin-left: 15px; margin-top: 17px;">Horário Atual</b>
  						<input class="fieldHora" type="time" name="horaantiga" value="00:00">

  						<b style="margin-left: 90px; margin-top: 17px;">Horário Novo</b>
  						<input class="fieldHora" type="time" name="horanova" value="00:00">

  					</div>

				<b style="margin-left: 15px">Nome Responsável</b>
				<input class="field" name="nameRespHorario" style="text-transform: uppercase;" autocomplete="off">

		
				<input type="submit" name="enviar" value="Enviar solicitação" class="button2 button3 FontEn Borda" style="margin-left:100px; margin-right: 100px; margin-top: 15px">

				<?php 

	if(isset($_POST['enviar']))
		{
			date_default_timezone_set('America/Bahia');
			$horaAtualHorario = date('H:i');
			$nome_pct_horario = addslashes($_POST['nameHorario']);
			$nameMedHorario = addslashes($_POST['nameMedHorario']);
			$horaantiga = addslashes($_POST['horaantiga']);
			$horanova = addslashes($_POST['horanova']);
			$nameResp = addslashes($_POST['nameRespHorario']);

				if(!empty($nome_pct_horario) && !empty($nameMedHorario) && !empty($horaantiga) && !empty($horanova) && !empty($nameResp)) 
					{
						$u->conectar("farm_aux", "localhost","root","");	
						if($u->msgErro == "")//se esta tudo ok
							{	
															
								if($u->InserirHorario($nome_pct_horario, $nameMedHorario, $horaantiga, $horanova, $nameResp, $horaAtualHorario));
								{			

									echo '<script language= "JavaScript">
									location.href="../FarmAux/index.html"
									</script>';									
								}
							}
							else
							{
								echo "Erro: ".$u->msgErro;
							}
					}
				else
				{ 
					echo "<b style='margin-top:25px; text-decoration: underline; color:Red; text-align: center;'>Preencha todos os campos!</b>";
				}
}
?>

				</form>
				</div>
		</div>
</div>

	
	
	<div id="Corp" class="Seletor">
<h5>Copyright Oficial Brasil© - FarmAux</h5>
</div>
</body>
</html>