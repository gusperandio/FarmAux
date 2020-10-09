<?php
require_once '.\funcoes\Solicitacao.php';
$u = new Solicitacao
?>
<html lang="pt-br">

<head>

	<title>Alta - FarmAux</title>
	<meta charset="utf-8">
	<link rel="icon" href="../FarmAux/imagens/Enfermagem.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="arquivo.css">

</head>

<body class="fundoInicial">

	<!-- Botão de voltar -->
	<a href="../FarmAux/Enfermagem.html">
		<button class="buton button2 Borda Seletor" style="font-weight: bold;">
			<img src="../FarmAux/imagens/voltar.png" style="width: 30px; height: 30px">
		</button></a>

	<!-- Ajuda -->
	<div id="Anuncio">
	</div>
	<div id="TextSemOp" class="Seletor">
		<p style="color: white; font-size: 18px">Este formulário é usado para informar a alta ou alteração de internação do paciente.
			<br>
			<br>
			<span style="text-decoration: underline;">
				Todas as informações serão passadas para a farmácia de manipulação.</span></p>
	</div>

	<!-- Formulario -->
	<div id="centro">
		<div class="formulario Seletor">
			<div id="Icon" class="Seletor">
				<img src="../FarmAux/imagens/alta.png" style="width: 50px; height: 50px;">
			</div>
			<div id="TituloForm" class="Seletor">
				<center>
					<p>Alta do Paciente</p>
				</center>
			</div>

			<div style="font-family: Arial, Helvetica, san-serif">
				<form class="form" method="POST">

					<b style="margin-left: 15px">Nome Paciente</b>
					<input class="field" name="namepctalta" style="text-transform: uppercase;" autocomplete="off" maxlength="40">

					<!--Internação do Paciente -->
					<b style="margin-left: 15px">Nome Internação</b>
					<select name="nameIntAntigaAlta" class="field">

						<option value="Internacao I"> Internação I </option>
						<option value="Internacao II"> Internação II </option>
						<option value="Internacao III"> Internação III </option>
						<option value="Internacao IV"> Internação IV </option>
						<option value="UTI PEDIATRICA"> UTI PEDIÁTRICA </option>
						<option value="UTI CARDIOLOGICA"> UTI CARDIOLÓGICA </option>
						<option value="UTI ADULTO"> UTI ADULTO </option>

					</select>

					<!--Destino do Paciente -->
					<b style="margin-left: 15px">Destino do Paciente</b>
					<select name="nameIntDestinoAlta" class="field">

						<option value="Alta do hospital"> Alta do hospital </option>
						<option value="Internacao I"> Internação I </option>
						<option value="Internacao II"> Internação II </option>
						<option value="Internacao III"> Internação III </option>
						<option value="Internacao IV"> Internação IV </option>
						<option value="UTI PEDIATRICA"> UTI PEDIÁTRICA </option>
						<option value="UTI CARDIOLOGICA"> UTI CARDIOLÓGICA </option>
						<option value="UTI ADULTO"> UTI ADULTO </option>

					</select>

					<!--Nome Responsável -->
					<b style="margin-left: 15px">Nome Responsável</b>
					<input class="field" name="nameRespAlta" style="text-transform:uppercase;" autocomplete="off" maxlength="40">

					<!-- Botão Enviar Solicitação -->
					<input type="submit" name="enviar" value="Enviar solicitação" class="button2 button3 FontEn Borda posicaoEnviar" style="margin-left:100px; margin-right: 100px; margin-top: 10px;">

					<!-- Interação com o banco -->
					<?php

					if (isset($_POST['enviar'])) {
						date_default_timezone_set('America/Bahia');
						$horaAtualAlta = date('H:i');
						$nome_pct_alta = addslashes($_POST['namepctalta']);
						$nameIntAntiga = addslashes($_POST['nameIntAntigaAlta']);
						$nameIntDestino = addslashes($_POST['nameIntDestinoAlta']);
						$nameResp = addslashes($_POST['nameRespAlta']);

						if (!empty($nome_pct_alta) && !empty($nameIntAntiga) && !empty($nameIntDestino) && !empty($nameResp)) {
							$u->conectar("farm_aux", "localhost", "root", "");
							if ($u->msgErro == "") //se esta tudo ok
							{

								if ($u->InserirAlta($nome_pct_alta, $nameIntAntiga, $nameIntDestino, $nameResp, $horaAtualAlta)); {

									echo '<script language= "JavaScript">
									location.href="../FarmAux/index.html"
									</script>';
								}
							} else {
								echo "Erro: " . $u->msgErro;
							}
						} else {
							echo "<b style='margin-top:25px; text-decoration: underline; color:Red; text-align: center;'>Preencha todos os campos!</b>";
						}
					}
					?>

				</form>
			</div>
		</div>
	</div>


	<!-- Direitos autorais -->
	<div id="Corp" class="Seletor">
		<h5>Copyright Oficial Brasil© - FarmAux</h5>
	</div>

</body>

</html>