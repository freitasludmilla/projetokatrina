
    <!-- Linha do conteúdo -->
    <!-- Aqui vai o conteúdo de qualquer página! -->


    <div class="container p-4">
        <div class="row">
          <div class="col-md mx-auto py-5 text-center">

          <?php
           $con = conecta();
           $select = mysqli_query($con,"SELECT * FROM evento");
          ?>

            <table class="table table-striped" id="tabela" style="width:100%">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Data</th>
                  <th>Número de participantes</th>
                  <th>Horário de início</th>
                  <th>Local</th>
                  <th></th>
                  <th></th>
                  <!-- <th>Assunto</th> -->

              </tr>
            </thead>
            <tbody>
              <?php while ($array = mysqli_fetch_array($select)) {?>
              <tr>
                <td><?php echo $array['nome']; ?></td>
                <td><?php echo $array['data']; ?></td>
                <td><?php echo $array['numpartic']; ?></td>
                <td><?php echo $array['horario']; ?></td>
                <td><?php echo $array['local']; ?></td>
                <td><a href="?pagina=cadastroAlterarEvento&ideven=<?php echo $array['ideven'];?>" class="text-primary">Alterar</a></td>
                <td><a href="?pagina=cadastroExcluirEvento&ideven=<?php echo $array['ideven'];?>" class="text-danger">Excluir</a></td>



              </tr>
            <?php } ?>
           </tbody>
            </table>

         </div>
       </div>
     </div>




    <script>
        $(document).ready(function(){
          $("#tabela").DataTable({
            responsive: true,
            // "bSort": false,
            "aaSorting": [],
            "pageLength": 50,
            "language": {
                "decimal": "",
                "emptyTable": "Sem dados disponíveis",
                "info": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
                "infoEmpty": "Mostrando de 0 até 0 de 0 registos",
                "infoFiltered": "(filtrado de _MAX_ registos no total)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ registos",
                "loadingRecords": "A carregar dados...",
                "processing": "A processar...",
                "search": "Procurar:",
                "zeroRecords": "Não foram encontrados resultados",
                "paginate": {
                    "first": "Primeiro",
                    "last": "Último",
                    "next": "Seguinte",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": ordem crescente",
                    "sortDescending": ": ordem decrescente"
                }
              }
            });
        });
    </script>


    <!-- Fim do conteúdo -->
