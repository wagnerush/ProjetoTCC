<?php

$idaluno = NULL;
$valor = NULL;
$data = NULL;


if (isset($_GET["pagamento"])) {
  $idaluno = $_GET["pagamento"];
  $sql = "SELECT * FROM aluno WHERE idaluno = $idaluno";
  $query = mysqli_query($conexao, $sql);
  if($row = mysqli_fetch_assoc($query)){
    $idaluno= $row["idaluno"];
    $nome = $row["nome"];
    }

}
?>

<h2>Lançamento</h2>
<form action="?pg=processar_pagamento" method="POST">

 
    <div class="form-row">

   <div class="form-group col-md-1">
    <label for="inputId">Id</label>
    <input type="text" class="form-control" id="inpuId" required="" name="idaluno" placeholder="Id Aluno" value="<?= $idaluno ?>">
   </div>

   <div class="form-group col-md-4">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" id="inputName" required="" name="nome" placeholder="Nome" value="<?= $nome ?>">
   </div>

  <div class="form-group col-md-2">
    <label for="inputValor">Valor</label>
    <input type="text" maxlength="10" class="form-control" id="inputValor" required="" name="valor" placeholder="Valor" >
  </div>

  <div class="form-group col-md-2">
    <label for="inputData">Data</label>
    <input type="date" class="form-control" id="inputData" required="" name="data" >
  </div>

</div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>