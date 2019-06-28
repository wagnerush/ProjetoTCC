<?php




$sql = "SELECT * FROM aluno";

$query = mysqli_query($conexao, $sql);


// echo "<table>";

// while($row = mysqli_fetch_assoc($query)) 
// {
// 	$email = $row["email"];
// 	echo "<tr>";

// 	echo "<td>";
// 	echo $row["nome"];
// 	echo "</td>";

// 	echo "<td>$email</td>";

// 	echo "</tr>";
// }

// echo "</table>";

echo "<table>";

  echo "<tr>
    <th>ID Aluno</th>
    <th>Nome</th>
    <th>c p f</th>
    <th>Modalidade</th>
    <th>Situação</th>

  </tr>";

while($row = mysqli_fetch_assoc($query)){
?>

	<tr>
		<td>
			<?= $row["idaluno"] ?>
		</td>
		<td>
			<?= $row["nome"] ?>
		</td>
		<td>			
			<?= $row["cpf"] ?>
		</td>
			<td>			
			<?= $row["modalidade"] ?>
		</td>

			<td>			
			<?= $row["situacao"] ?>
		</td>
		<td>
			<a 
			href="?pg=cadastro&editar=<?= $row["idaluno"] ?>"
			>
				Editar
			</a>
		</td>
		<td>
			<a 
			href="?pg=lancamento&pagamento=<?= $row["idaluno"] ?>"
			>
				Pagamento
			</a>
		</td>
	</tr>

<?php 

}

echo "</table>";

?>

