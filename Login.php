<?php
	require_once '.\funcoes\usuarios.php';
	$u = new Usuario


?> 
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="300">
    <link rel="icon" href="../FarmAux/imagens/pilula.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="arquivo.css">
	<script src="acesso.js"></script>

	<style>
		input{
			margin-left: 15%; 
			margin-right: 15%;
		}

		b{
			margin-left: 30px;
			margin-top: 20px;
			font-size: 15px;
			font-family: Arial, Helvetica, san-serif;
		}
		
	</style>

</head>

<body class="fundoInicial Seletor">

	<a href="../FarmAux/index.html">
	<button class="buton button2 Borda" style="font-weight: bold;"> 
		<img src="../FarmAux/imagens/voltar.png" style="width: 30px; height: 30px">
	</button></a>

	<div class="formularioLogin Seletor">

		<center>
		<p class="FontEn" style="font-size: 150%; text-decoration:overline;">Acesso Farmácia<p>
		</center>

		<form class="form" method="POST">

			<input type="login" name="loginusuario" class="field" placeholder="LOGIN" autocomplete="off" maxlength="30">

			<input type="password" name="senha_login" class="field" placeholder="SENHA" style="text-transform: uppercase;" maxlength="32">

			<input type="submit" name="logar" value="ENTRAR" class="button2 button3" style="margin-top: 3%; border-radius: 5px; background-color: #FF643B; padding: 3px;">

			<!--<b><a href="/FarmAux/Cadastro.php" class="acc acc2">Criar Conta</a></b>-->
			

			<?php  

		if(isset($_POST['logar']))
		{
			$nomeLogin = addslashes($_POST['loginusuario']);
			$senhalogin = addslashes($_POST['senha_login']);

				if(!empty($nomeLogin) && !empty($senhalogin))
					{
						$u->conectar("farm_aux", "localhost","root","");	
						if($u->msgErro == "")//se esta sem erro
							{	
															
								if($u->logar($nomeLogin, $senhalogin))
									{												
										header("location: tabela.php");									
									}
									else
									{
										echo "<b style='margin-top:15px; text-decoration: underline; color:Red; text-align: center;'>Usuario ou senha incoretos</b>";
									}
							}
						else
							{
								echo "Erro: ".$u->msgErro;
							}
					}
				else
					{ 
						echo "<b style='margin-top:15px; text-decoration: underline; color:Red; text-align: center;'>PREENCHA TODOS OS CAMPOS!</b>";
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