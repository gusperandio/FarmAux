<!--<?php 
	//session_start();
	//if(!isset($SESSION['id_usuario']))
	{
		//header("location: login.php");
		//exit;
	}
 ?>-->

<?php
	require_once 'C:\xampp\htdocs\FarmAux\funcoes\funcoes.php';
	$p = new funcoes("farm_aux","localhost","root","")
?>

<html lang="pt-br">
<head>

	<title>FarmAux</title>
	<meta charset="iso-8859-1">
    <link rel="icon" href="../FarmAux/imagens/pilula.png" type="image/x-icon">
    <meta http-equiv="refresh" content="20">
	<link rel="stylesheet" href="arquivo.css">

	<style>
		td{
		padding: 10px;
		text-align: center;
		font-size: 80%;
		font-weight: bold;
		color: black;
		}
		.tdpadding{
		padding: 5px;
		border-right: 2px solid black;
		font-weight: 900;
		padding-bottom: 20px;
		}
		tr{
		padding-top: 8px;
		font-family: Arial, sans-serif;
		
		}
		table{
			margin-top: 7px;		
		}
		b{
			text-decoration: underline;
			font-size: 20px;
			font-family: Optima, sans-serif;
			text-shadow: 1px 1px white;
		}


	</style>

</head>

<body class="fundoInicial">

	<a href="../FarmAux/index.html">
	<button class="buton button2 Borda Seletor" style="font-weight: bold;"> 
		
		<img src="../FarmAux/imagens/voltar.png" style="width: 30px; height: 30px">
		
	</button></a>

	<div id="centro">
 	<div class="divTable Seletor" style=" height: 600px; width: 1200px;border: 3px solid #000;" >
	<div class="divTableBody">
	<div class="divTableRow">

	<div class="divTableCell imgConfig">


				
			<center>
				<b>Alta do Paciente</b>
			</center>
		
			<table>

			<tr>
				
				<td style="text-align: center;" class="tdpadding">Horário Solicitação</td>
				<td style="text-align: center;" class="tdpadding">Nome Paciente </td>
				<td style="text-align: center;" class="tdpadding">Nome Responsável </td>
				<td style="text-align: center;" class="tdpadding">Internação</td>
				<td style="text-align: center;" class="tdpadding">Destino do Paciente</td>

			</tr>

		
			<?php  

				$dadosAlta = $p->BuscarDadosAlta();
				$dadosfalta = $p->BuscarDadosFalta();
				$dadosHorario = $p->BuscarDadosHora();
				$dadosDev = $p->BuscarDadosDev();


				if (count($dadosAlta) >0 )
				{

					for ($i=0; $i < count($dadosAlta) ; $i++) 
					{ 	
						echo "<tr>";
						foreach ($dadosAlta[$i] as $k => $v)
						{

							if($k != "id_solicitacao_alta")
							{

								echo "<td style='text-transform: uppercase; border-bottom: 2px solid black;'>".$v."</td>";

							}
						}
						?>

						<td>
						<a href="../FarmAux/tabela.php?id_solicitacao_alta=<?php echo $dadosAlta[$i]['id_solicitacao_alta'];?>">
						<button class="buton button2 Borda"> 
						<img src="../FarmAux/imagens/OK.png" style="width: 25px; height: 25px">
						</button></a>
						</td>
						<?php
						echo "</tr>";
						
					}
				}

				?>

			</table>	

	</div>

	<div class="divTableCell imgConfig" style="background-image: url(../FarmAux/imagens/falta1.png);">
		
			
			<center>
				<b>Falta de medicação</b>
			</center>
		
			<table>
				<tr>

					<td style="text-align: center;" class="tdpadding">Horário Solicitação</td>
					<td style="text-align: center;" class="tdpadding">Nome Paciente </td>
					<td style="text-align: center;" class="tdpadding">Nome Responsável </td>
					<td style="text-align: center;" class="tdpadding">Nome Medicação</td>
					<td style="text-align: center;" class="tdpadding">Horário Falta</td>

				</tr>

				<?php

				if (count($dadosfalta) >0 )
				{
					
					for ($i=0; $i < count($dadosfalta) ; $i++) 
					{ 
						
						echo "<tr>";
						foreach ($dadosfalta[$i] as $k => $v)
						{

							if($k != "id_solicitacao_falta")
							{

								echo "<td style='text-transform: uppercase; border-bottom: 2px solid black;'>".$v."</td>";


							}
						}
						?>
						<td>
						<a href="../FarmAux/tabela.php?id_solicitacao_falta=<?php echo $dadosfalta[$i]['id_solicitacao_falta']; ?>">
						<button class="buton button2 Borda Seletor" style="font-weight: bold;"> 
						<img src="../FarmAux/imagens/OK.png" style="width: 15px; height: 15px">
						</button></a>
						</td>
						<?php
						echo "</tr>";
					}
				}

				?>

			</table>	

	</div>
	</div>
	<div class="divTableRow">

	<div class="divTableCell imgConfig" style="background-image: url(../FarmAux/imagens/devolucao1.png);">
	
		<center>
		<b>Devolução de Medicação</b>
		</center>

		<table>
		<tr>

				<td style="text-align: center;" class="tdpadding">Horário Solicitação</td>
				<td style="text-align: center;" class="tdpadding">Nome Paciente </td>
				<td style="text-align: center;" class="tdpadding">Nome Responsável </td>
				<td style="text-align: center;" class="tdpadding">Nome Medicação</td>		
				<td style="text-align: center;" class="tdpadding">Motivo Devolução</td>
				
				</tr>
				
				<?php

				if (count($dadosDev) >0 )
				{
					
					for ($i=0; $i < count($dadosDev) ; $i++) 
					{ 	

						echo "<tr>";
						foreach ($dadosDev[$i] as $k => $v)
						{


							if($k != "id_solicitacao_dev")
							{

								echo "<td style=' border-bottom: 2px solid black;'>".$v."</td>";


							}
						}
						?>
						<td>
						<a href="../FarmAux/tabela.php?id_solicitacao_dev=<?php echo $dadosDev[$i]['id_solicitacao_dev']; ?>">
						<button class="buton button2 Borda Seletor" style="font-weight: bold;"> 
						<img src="../FarmAux/imagens/OK.png" style="width: 15px; height: 15px">
						</button></a>
						</td>
						<?php
						echo "</tr>";
					}
				}
			?>
			
			
			
		</table>
	</div>

	<div class="divTableCell imgConfig" style="background-image: url(../FarmAux/imagens/horario1.png);">

		

			<center>
			<b>Alteração de horário</b>
			</center>

		<table>
		<tr>

				<td style="text-align: center;" class="tdpadding">Horário Solicitação</td>
				<td style="text-align: center;" class="tdpadding">Nome Paciente </td>
				<td style="text-align: center;" class="tdpadding">Nome Responsável </td>
				<td style="text-align: center;" class="tdpadding">Nome Medicação</td>
				<td style="text-align: center;" class="tdpadding">Horário Antigo</td>
				<td style="text-align: center;" class="tdpadding">Horário Novo</td>

				</tr>
				
				<?php

				if (count($dadosHorario) >0 )
				{
					
					for ($i=0; $i < count($dadosHorario) ; $i++) 
					{ 
						echo "<tr>";
						foreach ($dadosHorario[$i] as $k => $v)
						{

							if($k != "id_solicitacao_hora")
							{

								echo "<td style='text-transform: uppercase; border-bottom: 2px solid black;'>".$v."</td>";


							}
						}
						?>
						<td>
						<a href="../FarmAux/tabela.php?id_solicitacao_hora=<?php echo $dadosHorario[$i]['id_solicitacao_hora']; ?>">
						<button class="buton button2 Borda Seletor" style="font-weight: bold;"> 
						<img src="../FarmAux/imagens/OK.png" style="width: 15px; height: 15px">
						</button></a>
						</td>
						<?php
						echo "</tr>";
					}
				}

				?>

			</table>			
	</div>
	</div>
	</div>
	</div>
</div>



</body>
</html>	

<?php

	if(isset($_GET['id_solicitacao_alta']))
	{
		$idAlta = addslashes($_GET['id_solicitacao_alta']);
		$p->ExcluirAlta($idAlta);
		echo '<script language= "JavaScript">location.href="../FarmAux/tabela.php"</script>';

	}

	if(isset($_GET['id_solicitacao_falta']))
	{
		$idFalta = addslashes($_GET['id_solicitacao_falta']);
		$p ->ExcluirFalta($idFalta);
		echo '<script language= "JavaScript">location.href="../FarmAux/tabela.php"</script>';
		
	}

	if(isset($_GET['id_solicitacao_hora']))
	{
		$idHorario = addslashes($_GET['id_solicitacao_hora']);
		$p ->ExcluirHorario($idHorario);
		echo '<script language= "JavaScript">location.href="../FarmAux/tabela.php"</script>';
		

	}

	if(isset($_GET['id_solicitacao_dev']))
	{
		$idDev = addslashes($_GET['id_solicitacao_dev']);
		$p ->ExcluirDev($idDev);
		echo '<script language= "JavaScript">location.href="../FarmAux/tabela.php"</script>';

	}

?>