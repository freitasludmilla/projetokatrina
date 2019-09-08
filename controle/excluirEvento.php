<?php

$con = conecta();
$ideven = trim($_POST['ideven']);
$del_even = "delete from evento where ideven=$ideven";
$res = mysqli_query($con, $del_even);

if ($res) { ?>
    <div class="col-md-11 mx-auto mt-3 py-4 alert alert-warning" role="alert">
      <h4 class="alert-heading">Excluído com sucesso!</h4>
      <hr>
      <p>O registro já foi excluído do banco de dados do sistema.</p>
      <p class="mb-0">Clique <b><a href='?pagina=perfilPessoa'>aqui</a></b> para voltar.</a></p>
    </div>
<?php } else {?>
  <div class="col-md-11 mx-auto mt-3 py-4 alert alert-danger" role="alert">
    <h4 class="alert-heading">ERRO!</h4>
    <p>Não foi possível excluir, tente novamente.</p>
    <hr>
    <p class="mb-0">Clique <b><a href='?pagina=perfilPessoa'>aqui</a></b> para voltar.</a></p>
  </div>
<?php } ?>
