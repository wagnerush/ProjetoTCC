<?php 

	#Conexao com o banco de dados

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "academia";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	 
 ?>