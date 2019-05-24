<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$query = mysqli_query($link, $sql);

if($query === TRUE){

	echo '<div class="alert-sucess" role="alert"> Cadastrado com sucesso!</div>';
}

else{
	echo '<div class="alert-danger" role="alert"> Esqueceu de preencher algum campo hein carinha</div>';
}



?>