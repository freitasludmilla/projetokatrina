<?php
function navega($pagina){
  switch ($pagina) {
    case 'alterarEvento':
      require '../paginas/cadastroAlterarEvento.php';
      break;


    // default:
    //   require 'paginas/home.php';
    //   break;
  }
}

function conecta(){
  return mysqli_connect('localhost', 'root', '', 'katrina');
}
 ?>
