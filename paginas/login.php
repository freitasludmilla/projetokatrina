

    <!-- Linha do conteúdo -->
    <!-- Aqui vai o conteúdo de qualquer página! -->
    <div class="row">
      <div class="col-md text-center">


        <form action="?pagina=vlogin" method="post" class="p-4" id="formulario">
            <!-- action, informa para onde os dados iram -->
            <!-- post esconde os dados privados da url -->
            <label>Login: </label>
            <input type="text" name="nick" value="" class="form-login obrigatorio">
            <span class="mensagem"></span>
            <br>

            <label>Senha: </label>
            <input type="password" name="senha" value="" class="form-senha obrigatorio">
            <span class="mensagem"></span>
            <br>
            <br>

            <button type="submit" class="mt-3 btn btn-info" name="">Entrar</button>


        </form>

      </div>
    </div>
    <!-- Fim do conteúdo -->
