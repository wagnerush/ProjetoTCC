<?php


$idaluno = $_POST["idaluno"];
$valor = $_POST["valor"];
$data = $_POST["data"];



// if(isset($_GET["pagamento"]) && $_GET["pagamento"] != 0){
// 	$idaluno = $_GET["pagamento"];

$sql = "INSERT INTO lancamento (idaluno, valor, data) VALUES ($idaluno, $valor, '$data')";


// }

$query = mysqli_query($conexao, $sql);

if ($query === TRUE) 
{

	echo '
	<div class="alert alert-success" role="alert">
  		Pagamento  lançado com sucesso!
	</div>';	
}
else{
	echo '
	<div class="alert alert-danger" role="alert">
  		Falhou!
	</div>';
}

?>
		