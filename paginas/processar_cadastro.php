<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$telefone = $_POST["telefone"];
$end_rua = $_POST["end_rua"];
$end_bairro = $_POST["end_bairro"];
$end_cidade = $_POST["end_cidade"];
$modalidade = $_POST["inlineRadioOptions"];
$situacao = $_POST["situacao"];

if(isset($_GET["editar"]) && $_GET["editar"] != 0){
	$idaluno = $_GET["editar"];
	$sql = "UPDATE aluno SET nome='$nome', cpf='$cpf', rg='$rg', telefone ='$telefone', end_rua='$end_rua', end_bairro='$end_bairro', modalidade='$modalidade', situacao= '$situacao' WHERE idaluno = $idaluno";
}
else{
	
	$sql = "INSERT INTO aluno (nome, cpf, rg, telefone, end_rua, end_bairro, end_cidade, modalidade, situacao) VALUES ('$nome', '$cpf', '$rg', '$telefone', '$end_rua', '$end_bairro', '$end_cidade', '$modalidade', '$situacao')";
}


$query = mysqli_query($conexao, $sql);

if ($query === TRUE) 
{

	echo '
	<div class="alert alert-success" role="alert">
  		Cadastrado com sucesso!
	</div>';	
}
else{
	echo '
	<div class="alert alert-danger" role="alert">
  		Falhou!
	</div>';
}

?>