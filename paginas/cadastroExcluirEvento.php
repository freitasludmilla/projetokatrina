<?php
$ideven = trim($_GET['ideven']);
$con = conecta();
$res = mysqli_query($con, "SELECT * FROM evento WHERE ideven=$ideven");
$evento = mysqli_fetch_assoc($res);
?>


    <!-- Linha do conteúdo -->
    <!-- Aqui vai o conteúdo de qualquer página! -->


    <form action="?pagina=excluirEvento" method="post" class="" id="formularioEvento">



        <input type="text" name="nome" maxlength="50" placeholder="Nome" class="form-control"
        value="<?php echo $evento['nome'];?>" title="Preencha este campo"
    required />
        <span class="mensagem"></span>
        <br>

        <input type="date" name="data" maxlength="50" placeholder="Data" class="form-control"
         value="<?php echo $evento['data'];?>" title="Preencha este campo"
    required />
        <span class="mensagem"></span>
        <br>

        <input type="number" name="numpartic" maxlength="50" placeholder="Número máximo de participantes" class="form-control"
         value="<?php echo $evento['numpartic'];?>"  title="Preencha este campo"
    required />
        <span class="mensagem"></span>
        <br>

        <input type="time" name="horario" maxlength="50" placeholder="Horario de início" class="form-control"
         value="<?php echo $evento['horario'];?>" title="Preencha este campo"
    required />
        <span class="mensagem"></span>
        <br>

        <input type="text" name="local" maxlength="50" placeholder="Local" class="form-control"
         value="<?php echo $evento['local'];?>" title="Preencha este campo"
    required />
        <span class="mensagem"></span>
        <br>

        <input type="" name="assunto" maxlength="500" placeholder="Descrição" class="form-control"
         value="<?php echo $evento['assunto'];?>" title="Preencha este campo"
    required />
        <span class="mensagem"></span>
        <br>



        <input id="ideven" name="ideven" value="<?php echo $evento['ideven'];?>"
        type="hidden">
        <button type="submit" class="mt-3 btn btn-info align-center" name="">Excluir evento</button>
        <a href="?pagina=perfilPessoa"><button type="button" class="mt-3 btn btn-danger">Cancelar</button></a>

    </form>



    <!-- Fim do conteúdo -->
