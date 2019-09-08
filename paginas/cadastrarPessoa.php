

<!-- Linha do conteúdo -->
<div class="row">
  <div class="col-md text-center">
    <!-- Aqui vai o conteúdo de qualquer página! -->

    <form action="?pagina=salvarPessoa" method="post" class="" id="formularioPessoa">

      <!-- onSubmit="return verificaCamposPessoa(); -->

      <input type="text" name="nome" maxlength="50" placeholder="Nome" class="form-control"  value="" title="Preencha este campo"
      required />
      <span class="mensagem"></span>
      <br>
      <!-- value: valor que o campo tem -->

      <input type="text" name="username" index="username" class="form-control" maxlength="50" placeholder="Nome de usuário" value="" title="Preencha este campo"
      required/>
      <span class="mensagem" </span>
        <br>


        <input type="text" name="cpf" maxlength="15" placeholder="CPF" value="" title="Preencha este campo" class="form-control cpf"
        required/>
        <span class="mensagem"></span>
        <br>


        <input type="text" name="rg" maxlength="15" placeholder="RG" value="" title="Preencha este campo" class="form-control rg"
        required/>
        <span class="mensagem"></span>
        <br>

        <select name="funcao" id="funcao" class="form-control"/><br>

        <option value="">Selecione uma função</option>
        <option value="1">Docente</option>
        <option value="2">Discente</option>


      </select>
      <span class="mensagem"></span>
      <br>

      <!-- -------------------------------------------- -->
      <!-- dados para aluno -->
      <div id="aluno" style="display: none;">


        <input type="text" name="ra" maxlength="11" class="form-control"  placeholder="RA" value=""/>
        <span class="mensagem"></span>
        <br>


        <input type="text" name="anoIngresso" maxlength="4" class="form-control" placeholder="Ano Ingresso" value=""/>
        <span class="mensagem"></span>
        <br>


        <input type="text" name="curso" maxlength="30" class="form-control" placeholder="Curso" value=""/>
        <span class="mensagem"></span>
        <br>

      </div>

      <!-- -------------------------------------------- -->
      <!-- dados para servidor -->
      <div id="servidor"  style="display: none;">


        <input type="text" name="siape" maxlength="10" placeholder="Siape" value="" class="form-control"/>
        <span class="mensagem"></span>
        <br>


        <input type="text" name="formacao" maxlength="30" placeholder="Formação" value="" class="form-control"/>
        <span class="mensagem"></span>
        <br>

      </div>


      <!-- -------------------------------------------- -->


      <input type="password" maxlength="50" minlength="7" id="senha" name="senha" placeholder="Senha" class="form-control" value="" title="Preencha este campo"
      required />
      <span class="mensagem"></span>
      <br>

      <button type="submit" class="mt-3 btn btn-info" name="">Salvar</button>

    </form>


  </div>
</div>
<!-- Fim do conteúdo -->



<!-- -------------------------------------------- -->
<!-- ESCONDE E MOSTRA CAMPOS FUNÇÃO -->

<script type="text/javascript">
$(document).ready(function(){

  // Criar um evento par quando alterar o valor do selects
  $("#funcao").change(function(){

    // receber o valor atual
    var atual = $(this).val();

    if(atual == "1" ){

      $("#aluno").hide();
      $("#servidor").show();

    } else if(atual == "2"){
      $("#servidor").hide();
      $("#aluno").show();

    } else {
      $("#servidor").hide();
      $("#aluno").hide();


    }

  });

});
</script>
