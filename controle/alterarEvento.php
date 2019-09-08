<?php

$con = conecta();

$ideven = trim($_POST['ideven']);

$nome = trim($_POST['nome']);
$data = trim($_POST['data']);
$numpartic = trim($_POST['numpartic']);
$horario = trim($_POST['horario']);
$local = trim($_POST['local']);
$assunto = trim($_POST['assunto']);


$ultimaPessoa = mysqli_insert_id($con);
$up_evento = "UPDATE evento SET nome='$nome', data='$data', numpartic='$numpartic', horario='$horario', local='$local', aprovacao='true', assunto='$assunto', idpes='1' where ideven='$ideven'";
// echo $up_evento;
//$id = "SELECT idprofessor from professor, aluno WHERE escola = '$escola'  AND turma = '$turma' AND periodo = '$peri'  ";
 $resultado = mysqli_query($con, $up_evento);

if($resultado){
      header("Location: ?pagina=perfilPessoa");
}

?>
