<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Incluindo o arquivo de conexao com o banco de dados
require_once("config/conexaobd.php");

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Projeto Academia</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js" ></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body>

		<div class="container" id="cabecalho">
			
			<div class="imagemlogo">
				<img src="img/logo3.png">
			</div>

			<div class="jumbotron" id="botoesnav">
						

				<ul class="menu">
					<li><a class="btn btn-primary" role="button" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=listagem">Lista de Alunos</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=relatorio">Relatório</a></li>
					
				</ul>

			</div>

		</div>

		<div class="container" id="corpo">


			<?php

				if(isset($_GET["pg"])){
					$pagina = $_GET["pg"];
				}
				else{
					$pagina = "cadastro";
				}				

				include("paginas/".$pagina.".php");

			?>
			
		</div>

		<div class="container" id="rodape">

			<div class="jumbotron">				

				<h4>Todos os direitos reservados.</h4>				

			</div>
			
		</div>


	</body>
</html>