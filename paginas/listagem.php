<?php

echo"<table>";

$sql = "SELECT * FROM usuario";

$query = mysqli_query($link, $sql);

// while($row = mysqli_fetch_assoc($query)){

// 	echo"<tr>";

// 		echo"<td>";
// 		echo $row["nome"];
// 		echo"</td>";
// 		echo"<td>";
// 		echo $row["email"];
// 		echo"</td>";

// 	echo "</tr>";
// }


// echo"</table>"

echo "<table>";

while($row = mysqli_fetch_assoc($query)){

?>

	<tr>
		<td><?= $row["nome"] ?></td>
		<td><?= $row["email"] ?></td>
	</tr>



<?php 
} 
echo"</table>";
?>