<?php
require_once '.\funcoes\usuarios.php';
$u = new Usuario
?>
<html lang="pt-br">

<head>
	<title>Login - FarmAux</title>
	<meta charset="utf-8">
	<link rel="icon" href="../FarmAux/imagens/pilula.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="arquivo.css">


	<style>
		input {
			margin-left: 15%;
			margin-right: 15%;
		}
	</style>

</head>

<body class="fundoInicial Seletor">
	<a href="../FarmAux/Login.php">
		<button class="buton button2 Borda" style="font-weight: bold;">
			<img src="../FarmAux/imagens/voltar.png" style="width: 30px; height: 30px">
		</button></a>

	<div class="formularioCad Seletor">

		<center>
			<p class="FontEn" style="font-size: 150%; text-decoration:overline;">Cadastro</p>
		</center>

		<form class="form" method="POST">

			<input type="login" name="nome_cad" class="field" placeholder="USUARIO" autocomplete="off" maxlength="30">

			<input type="password" name="senha_cad" class="field" placeholder="SENHA" maxlength="32">

			<input type="password" name="confsenha" class="field" placeholder="CONFIRMAR SENHA" maxlength="32">

			<input type="submit" name="criarconta" value="CADASTRAR" class="button2 button3 Seletor" style="margin-top: 4%; border-radius: 5px; background-color: #FF643B; padding: 3px;">

			<?php

			if (isset($_POST['criarconta'])) {
				//addslashes evita comando malicioso
				$nomeCad = addslashes($_POST['nome_cad']);
				$senhaCad = addslashes($_POST['senha_cad']);
				$ConfirmarSenha = addslashes($_POST['confsenha']);

				if (!empty($nomeCad) && !empty($senhaCad) && !empty($ConfirmarSenha)) {
					$u->conectar("farm_aux", "localhost", "root", "");
					if ($u->msgErro == "") //se esta sem erro
					{
						if ($senhaCad == $ConfirmarSenha) {


							if ($u->cadastrar($nomeCad, $senhaCad)) {
								echo '<script language= "JavaScript"> location.href="../FarmAux/login.php" </script>';
							} else {
								echo "<b style='margin-top:15px; text-decoration: underline; color:Red; text-align: center;'>Usuario ja cadastrado</b>";
							}
						} else {

							echo "<b style='margin-top:15px; text-decoration: underline; color:Red; text-align: center;'>Senhas não combinam</b>";
						}
					} else {
						echo "Erro: " . $u->msgErro;
					}
				} else {
					echo "<b style='margin-top:15px; text-decoration: underline; color:Red; text-align: center;'>Preencha todos os campos</b>";
				}
			}
			?>

		</form>
	</div>

	<div id="Corp">
		<h5>Copyright Oficial Brasil© - FarmAux</h5>
	</div>

</body>

</html>