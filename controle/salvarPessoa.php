<?php
$con = conecta();
// $cad_pessoa = "INSERT INTO pessoa (nome,	nomeUsuario,	rg,	cpf, senha) VALUES ('lud', 'lud', '44444444444', '11111111111', '1234567')";
// $resultado = mysqli_query($con, $cad_pessoa);
// if($resultado){
//   echo "cadastrado com sucesso";
// }

$nome = trim($_POST['nome']);
$username = trim($_POST['username']);
$rg = trim($_POST['rg']);
$cpf = trim($_POST['cpf']);

$funcao = trim($_POST['funcao']);

$ra = trim($_POST['ra']);
$anoIngresso = trim($_POST['anoIngresso']);
$curso = trim($_POST['curso']);

$siape = trim($_POST['siape']);
$formacao = trim($_POST['formacao']);

$senha = trim($_POST['senha']);

$função = trim($_POST['funcao']);


$cad_pessoa = "INSERT INTO pessoa (nome,	nomeUsuario,	rg,	cpf, senha) VALUES ('$nome', '$username', '$rg', '$cpf', '$senha')";
echo $cad_pessoa;
// $resultado = mysqli_query($con, $sql);
//strtolower($cad_pessoa);

//$id = "SELECT idprofessor from professor, aluno WHERE escola = '$escola'  AND turma = '$turma' AND periodo = '$peri'  ";

 $resultado = mysqli_query($con, $cad_pessoa);

 if($resultado){

  $ultimoid = mysqli_insert_id($con);
  $cad_servidor = "INSERT INTO servidor (idpes,	siape,	formacao) VALUES ('$ultimoid', '$siape', '$formacao')";

  if($funcao == 1){
    // Docente
    $cad_servidor = "INSERT INTO servidor (idpes,	siape,	formacao) VALUES ('$ultimoid', '$siape', '$formacao')";
    $insere_ser = mysqli_query($con, $cad_servidor);

  }else if($funcao == 2){
    //Discente
    $cad_aluno = "INSERT INTO aluno (idpes, ra, anoIngresso,	curso ) VALUES ('$ultimoid', '$ra', '$anoIngresso', '$curso')";
    $insere_alu = mysqli_query($con, $cad_aluno);

  }

  header("Location: ?pagina=perfilPessoa");
 // Como redirecionar o usuário

  }
  ?>
