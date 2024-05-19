<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>
		<div class="conteudo">
		<?php

			$data = $_POST["data"];
			$garantia = $_POST["garantia"];
			$servico = $_POST["servico"];
			$produto = $_POST["produto"];
			$marca = $_POST["marca"];


			echo "<br><br><br><h1>Orçamento</h1><br><hr>";

			echo "<strong>Data do Orçamento:</strong> $data - Valores Válidos até 15 dias após a solicitação, podendo ser alterado após o prazo <br><br><br>";

			echo "<strong>Garantia após a Entrega do Serviço:</strong> $garantia<br><br><br>";

			echo "<strong>Serviço a ser Executado:</strong> $servico<br><br><br>";

			switch ($servico) {
				case 'conserto':
					echo "Valor do Serviço R$ 70,00 mais R$ 30,00 de Garantia, totalizando R$ 100,00<br>";
					break;
				case 'outros':
					echo "Valor do Serviço R$ 90,00 mais R$ 90,00 de Garantia, totalizando R$ 180,00<br>";
					break;
				case 'formatação':
					echo "Valor do Serviço R$ 50,00 mais R$ 10,00 de Garantia, totalizando R$ 60,00<br>";
					break;	
				default:
					echo "Não cobrimos este tipo de Serviço<br>";
					break;
					
			}

			echo "<br><br><strong>Produto a ser Reparado:</strong> $produto da <strong>Marca</strong> $marca<br><br><br>";

		?>
		<br>
				<p>Nome Completo:________________________________________________<br><br></p>
				<p>Assinatura:&nbsp__________________________<br><br>Data:____/____/___ Celular:(  )_________________
					<br> Ao entregar a folha assinada, declaro concordar com os termos de Seriço.</p>

			<form>
				<input type="button" value="Imprimir Orçamento" onClick="window.print()"/>
			</form><br>			
			<a href="index.html"> << voltar</a>		
		
	
	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por TecTreinamentos</h3>
	</footer>




</body>
</html>