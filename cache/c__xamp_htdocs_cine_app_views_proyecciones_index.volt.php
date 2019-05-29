<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="" style="width: 35px;">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="admin">Peliculas    
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" href="proyecciones">Proyecciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categorias">Categorias
                <span class="sr-only">(current)</span>
            </a>
          </li>
       
        </ul>
      </div>
    </div>
</nav>
<!-- End Navigation -->
  
  <!-- Page Content -->
  <div class="container">
    <br>
      <button type="button" id="btnModalAd" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#modalAdd">
         Agregar Función
      </button>
      <hr>
      <table class="table" id="tablaFunciones">
         <thead>
           <th>Id</th><th>Pelicula</th><th>Sala</th><th>Días</th><th>Horario</th><th>Options</th>
         </thead>
         <tbody>
         </tbody>
      </table>
    
       <!-- Modal Inserction-->
      <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Funcion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <label for="visibleAdd">Pelicula:</label>
                  <select class="form-control" id="pelicula"> 
                    <?php foreach ($peliculas as $pelicula) { ?>          
                    <option  value="<?= $pelicula->id_pelicula ?>" ><?= $pelicula->nombre_pelicula ?></option>
                    <?php } ?>                  
                   </select>
                   <br>
                   <label for="visibleAdd">Sala:</label>
                   <select class="form-control" id="sala"> 
                      <?php foreach ($salas as $sala) { ?>          
                      <option  value="<?= $sala->id_sala ?>" ><?= $sala->sala ?></option>
                      <?php } ?>                  
                     </select>
                  <br>
                  <label for="visibleAdd">Día:</label>
                  <input class="form-control"  type="" name="name" placeholder="YYYY/MM/DD" value="" id="dia">
                  <br>
                  <label for="visibleAdd">Hora:</label>
                  <input class="form-control"  type="" name="name" placeholder="00:00" value="" id="hora">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-dark" id="btnAdd">Agregar función</button>
              </div>
            </div>
          </div>
      </div>
        <!--End Modal Inserction -->

      <!-- Modal Edit-->
      <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Funcion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <label for="visibleAdd">Pelicula:</label>
                  <select class="form-control" id="peliculaEditar"> 
                    <?php foreach ($peliculas as $pelicula) { ?>          
                    <option  value="<?= $pelicula->id_pelicula ?>" ><?= $pelicula->nombre_pelicula ?></option>
                    <?php } ?>                  
                   </select>
                   <br>
                   <label for="visibleAdd">Sala:</label>
                   <select class="form-control" id="salaEditar"> 
                      <?php foreach ($salas as $sala) { ?>          
                      <option  value="<?= $sala->id_sala ?>" ><?= $sala->sala ?></option>
                      <?php } ?>                  
                     </select>
                  <br>
                  <label for="visibleAdd">Día:</label>
                  <input class="form-control"  type="" name="name" placeholder="YYYY/MM/DD" value="" id="diaEditar">
                  <br>
                  <label for="visibleAdd">Hora:</label>
                  <input class="form-control"  type="" name="name" placeholder="00:00" value="" id="horaEditar">
                  <input class="form-control"  type="hidden" name="name" placeholder="00:00" value="" id="idEditar">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-dark" id="btnEditar">Guardar</button>
              </div>
            </div>
          </div>
      </div>
       <!--End Modal Edit -->

      <!-- Modal Delete-->
      <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Proyección</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  
                  <input class="form-control"  type="hidden" name="name" value="" id="idEliminar">
                
                  <label id="lblEliminar"></label>
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-dark" id="btnEliminar">Eliminar</button>
              </div>
            </div>
          </div>
      </div>
      <!--End Modal Delete -->

        <!--DataTable -->
      <script type="text/javascript">
          jQuery(document).ready(function($){
              var salas=[];
              $.ajax({
                "url": "<?php echo $this->url->get('salas/datatable') ?>",
                "type": "POST",
                dataType: "json",
              });
              tableFunciones=$('#tablaFunciones').DataTable({
                procesing:false,
                serverSide:false,
                  ajax: 
                  {
                    "url":"<?php echo $this->url->get('proyecciones/datatable')?>",
                    "type":"POST", 
                  },
                  columns:
                  [
                    {data: "id_proyeccion"},
                    {data: "pelicula"},
                    {data: "sala"},
                    {data: "dia"},
                    {data: "horario"},
                    {
                      sorteable:false,
                      "render":function(data,type,full,meta)
                      {
                        return '<div><button class="btn btn-warning"  onclick="editProyecciones(\''+full.id_proyeccion+'\',\''+full.pelicula+'\',\''+full.sala+'\',\''+full.dia+'\',\''+full.horario+'\')" data-toggle="modal"   data-target="#modalEdit" > <i class="fa fa-pencil"></i> </button> </div> <button class="btn btn-danger" onclick="delProyeccion(\''+full.id_proyeccion+'\')"><i class="fa fa-trash"></i> </button> </div>';
                      }
                    }
                    ],  "language": {
                        "lengthMenu": "Mostrar _MENU_ resultados por pagina",
                        "zeroRecords": "Ninguna coincidencia - Intente nuevamente",
                        "info": "Mostrando pagina _PAGE_ de _PAGES_",
                        "infoEmpty": "Sin información disponible",
                        "search":"Buscar:",
                        "infoFiltered": "(filtrado del total de _MAX_ registros)"
                 }
              });
          });

          $( "#btnAdd" ).click(function() {
            var pelicula = $('#pelicula').val();
            var sala = $('#sala').val();
            var dia = $('#dia').val();
            var hora = $('#hora').val();
            addProyeccion(pelicula,sala,dia,hora);
            setTimeout(function(){tableFunciones.ajax.reload();},1000); 
            $("#modalAdd").modal('hide');     
          });

          $( "#btnEditar" ).click(function() {
            var id = $('#idEditar').val();
            var pelicula = $('#peliculaEditar').val();
            var sala = $('#salaEditar').val();
            var dia = $('#diaEditar').val();
            var hora = $('#horaEditar').val();
            editarProyeccion(id,pelicula,sala,dia,hora);
           
            $("#modalEditar").modal('hide');  
            
          });

          $( "#btnEliminar" ).click(function() {
            var id = $('#idEliminar').val();         
            deleteProyeccion(id);
            setTimeout(function(){tableCategorias.ajax.reload();},1000);
            $("#modalEliminar").modal('hide');      
          });


      </script>
      <script type="text/javascript">

          function editProyecciones(id,pelicula,sala,dia,horario){
           $('#idEditar').val(id);
           $('#peliculaEditar').val(pelicula);
           $('#salaEditar').val(sala);
           $('#diaEditar').val(dia);
           $('#horaEditar').val(horario);
            $("#modalEditar").modal('show');  
          }
          
          function delProyeccion(id,categoria){
            $('#idEliminar').val(id);
            document.getElementById("lblEliminar").innerHTML = "¿Estas seguro que deseas eliminar esta proyección?";
            $("#modalEliminar").modal('show');
          }

          function addProyeccion(pelicula,sala,dia,hora)
          {
            $.ajax({
              type:"POST",
              url:"<?php echo $this->url->get('proyecciones/addAjax')?>",
              data:{pelicula:pelicula,sala:sala,dia:dia,hora:hora} 
            }).done(function(data){
              Swal.fire('Función  agregada');
            });
          }

          function editarProyeccion(id,pelicula,sala,dia,horario){
            $.ajax({
              type:"POST",
                url:"<?php echo $this->url->get('proyecciones/updateAjax') ?>",
                data:{id:id,pelicula:pelicula,sala:sala,dia:dia,horario:horario},
            }).done(function(data){
              Swal.fire('Proyección Actualizada ');
          });
          }

          function deleteProyeccion(id){
            $.ajax({
              type:"POST",
                url:"<?php echo $this->url->get('proyecciones/deleteAjax') ?>",
                data:{id:id} 
            }).done(function(data){
              Swal.fire('Categoria Eliminada');
          });
          }

      </script>

  </div>