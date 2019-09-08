<?php
function navega($pagina){
  switch ($pagina) {
    case 'cadastrarEvento':
      require 'paginas/cadastrarEvento.php';
      break;
    case 'cadastrarPessoa':
      require 'paginas/cadastrarPessoa.php';
      break;
    case 'login':
      require 'paginas/login.php';
      break;
    case 'perfilPessoa':
      require 'paginas/perfilPessoa.php';
      break;
    case 'verEventos':
      require 'paginas/perfilPessoa.php';
      break;
    case 'cadastroAlterarEvento':
      require 'paginas/cadastroAlterarEvento.php';
      break;
    case 'salvarEvento':
        require 'controle/salvarEvento.php';
        break;
    case 'salvarPessoa':
        require 'controle/salvarPessoa.php';
        break;
    case 'alterarEvento':
        require 'controle/alterarEvento.php';
        break;
    case 'vlogin':
        require 'controle/vlogin.php';
        break;
    case 'cadastroExcluirEvento':
        require 'paginas/cadastroExcluirEvento.php';
        break;
    case 'excluirEvento':
        require 'controle/excluirEvento.php';
        break;



     default:
       require 'paginas/home.php';
       break;






  }
}

function conecta(){
  return mysqli_connect('localhost', 'root', '', 'katrina');
  //return mysqli_connect(HOST, USER, PASS, BANCO);
}
 ?>
