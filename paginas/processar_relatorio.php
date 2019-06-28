<?php


$datainicio = $_POST["datainicio"];
$datafinal = $_POST["datafinal"];


$sql = "SELECT * FROM lancamento where data between '$datainicio' and '$datafinal'";



$query = mysqli_query($conexao, $sql);

// if ($query === TRUE) 
// {

echo "<table>";

  echo "<tr>
    <th>Id Pagamento</th>
    <th>Id Aluno</th>
    <th>Valor</th>
    <th>Data</th>
  </tr>";

while($row = mysqli_fetch_assoc($query)){

?>

	<tr>
		<td>
			<?= $row["id"] ?>
		</td>
		<td>
			<?= $row["idaluno"] ?>
		</td>
		<td>			
			<?= $row["valor"] ?>
		</td>

		<td>			
			<?= $row["data"] ?>
		</td>
	</tr>




<?php
//}
echo "</table>";	
}

// else{
// 	echo '
// 	<div class="alert alert-danger" role="alert">
//   		Falhou!
// 	</div>';
// }
?>