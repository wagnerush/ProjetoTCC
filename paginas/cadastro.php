<?php

$actionEditar = "";
$idaluno = NULL;
$nome = NULL;
$cpf = NULL;
$rg = NULL;
$telefone = NULL;
$end_rua = NULL;
$end_bairro = NULL;
$end_cidade = NULL;
$modalidade = null;
$situacao = null;


if (isset($_GET["editar"])) {
  $idaluno = $_GET["editar"];
  $sql = "SELECT * FROM aluno WHERE idaluno = $idaluno";
  $query = mysqli_query($conexao, $sql);
  if($row = mysqli_fetch_assoc($query)){
    $nome = $row["nome"];
    $cpf = $row["cpf"];
    $rg = $row["rg"];
    $telefone = $row["telefone"];
    $end_rua = $row["end_rua"];
    $end_bairro = $row["end_bairro"];
    $end_cidade = $row["end_cidade"];
    $modalidade = $row["modalidade"];
    $situacao = $row["situacao"];


  }
  else{
    echo "Falha ao carregar registro!";
  }
  $actionEditar = "&editar=$idaluno";
}

?>

<h2>Cadastro</h2>

<form action="?pg=processar_cadastro<?= $actionEditar ?>" method="POST">

    <div class="form-group">
      <label for="inputName">Nome</label>
      <input type="text" class="form-control" id="inputName" required="" name="nome" placeholder="Nome" value="<?= $nome ?>">
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCpf">CPF</label>
      <input type="text" maxlength="11" class="form-control" id="inputCpf" required="" name="cpf"  placeholder="CPF" value="<?= $cpf ?>">
    </div>

  <div class="form-group col-md-4">
    <label for="inputRg">RG</label>
    <input type="text" maxlength="10" class="form-control" id="inputRg" required="" name="rg" placeholder="RG" value="<?= $rg ?>">
  </div>

  <div class="form-group col-md-4">
    <label for="inputTel">Telefone</label>
    <input type="text" class="form-control" id="inputTel" required="" name="telefone" placeholder="Telefone" value="<?= $telefone ?>">
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-5">
    <label for="inputRua">Rua</label>
    <input type="text" class="form-control" id="inputRua" required="" name="end_rua" placeholder="Rua"  value="<?= $end_rua ?>">
  </div>
  <div class="form-group col-md-3">
    <label for="inputBairro">Bairro</label>
    <input type="text" class="form-control" id="inputBairro" required="" name="end_bairro" placeholder="Bairro" value="<?= $end_bairro ?>">
  </div>
  <div class="form-group col-md-4">
    <label for="inputEstado">Cidade</label>
    <input type="text" class="form-control" id="inputCidade" required="" name="end_cidade" placeholder="Cidade" value="<?= $end_cidade ?>">
  </div>

</div>

  <div class="form-group" required="">
    <h5>Modalidade</h5>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"  value="musculacao">
  <label class="form-check-label" for="inlineRadio1">Musculação</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"  value="spinning">
  <label class="form-check-label" for="inlineRadio2">Spinning</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"  value="boxe chines">
  <label class="form-check-label" for="inlineRadio3">Boxe Chinês</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"  value="treino funcional">
  <label class="form-check-label" for="inlineRadio4">Treino Funcional</label>
</div>
  </div>

<div class="form-group col-md-4">
      <label for="inputSituacao">Situacao</label>
      <select id="inputSituacao" class="form-control" type="text" name="situacao">
        <option selected>ativo</option>
        <option>desativado</option>
      </select>
    </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

</div>