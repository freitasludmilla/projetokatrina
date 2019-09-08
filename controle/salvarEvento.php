<?php

$con = conecta();


$nome = trim($_POST['nome']);
$data = trim($_POST['data']);
$numpartic = trim($_POST['numpartic']);
$horario = trim($_POST['horario']);
$local = trim($_POST['local']);
$assunto = trim($_POST['assunto']);


$ultimaPessoa = mysqli_insert_id($con);
$cad_evento = "INSERT INTO evento (nome, data, numpartic, horario, local, aprovacao, assunto, idpes ) VALUES ('$nome', '$data', '$numpartic', '$horario', '$local', 'true', '$assunto', '1')";
echo $cad_evento;
//$id = "SELECT idprofessor from professor, aluno WHERE escola = '$escola'  AND turma = '$turma' AND periodo = '$peri'  ";
 $resultado = mysqli_query($con, $cad_evento);

if($resultado){
      header("Location: ?pagina=perfilPessoa");
}


 ?>
