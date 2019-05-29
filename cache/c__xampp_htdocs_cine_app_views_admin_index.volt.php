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
            <span class="sr-only">(current)</span>   
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proyecciones">Proyecciones</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="categorias">Categorias

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clasificaciones">Clasificaciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Salas</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navigation -->
<script type="text/javascript">
  jQuery(document).ready(function($){
          var clasificaciones=[];
        $.ajax({
          "url": "<?php echo $this->url->get('clasificaciones/datatable') ?>",
          "type": "POST",
          dataType: "json",
          success: function(data){
                  var response=Object.values(data)
                  for(var i=0; i<response[0].length; i++){
                      clasificaciones.push(Object.values(response[0][i]))
                  }
                  nameClasificacion = new Array(clasificaciones.length)
                  for(var i=0; i<clasificaciones.length; i++){
                      var id = clasificaciones[i][0];
                      var name= clasificaciones[i][1];
                      nameClasificacion[clasificaciones[i][0]] = clasificaciones[i][1]
                  }
                }
            });
  });
</script>
<!-- Page Content -->
<div class="container">
  <br>
    <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#modalAdd">
       Agregar pelicula
    </button>
     <hr>
     <table class="table" id="tablaPeliculas">
       <thead>
         <th>Id</th><th>Pelicula</th><th>Prioridad</th><th>Opciones</th>
       </thead>
       <tbody>
       </tbody>
     </table>
    
 
     <!-- Modal Inserction-->
     <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nueva Pelicula</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <label for="name">Nombre:</label>
                <input class="form-control"  type="text" name="name" value="" id="nameInserction">
                <br>
                <label for="imagen">Link de la imagen de la pelicula:</label>
                <input class="form-control"  type="text" name="imagen" value="" id="imagenInserction">
                <br>
                <label for="triler">Link del trailer:</label>
                <input class="form-control"  type="text" name="triler" value="" id="trilerInserction">
                <br>
                <label for="duracion">Tiempo de duracion (min):</label>
                <input class="form-control"  type="text" name="duracion" value="" id="duracionInserction">
                <br>
                <label for="clasificacion">Clasificación:</label>
                <select name="clasificacion" id="clasificacion">
                    <?php foreach ($clasificaciones as $clasificacion) { ?>
                  <option value="<?= $clasificacion->id_clasificacion ?>"><?= $clasificacion->clasificacion ?></option>
                  <?php } ?>
                </select>
                <br>
                <label for="categoria">Categoria:</label>
                <select name="categoria" id="categoria">
                  <option></option>
                </select>
                <br>
                <label for="idioma">Idioma</label>
                <select name="idioma" id="idioma">
                  <option value="Ingles">Ingles</option>
                  <option value="Español">Español</option>
                </select>
                <br>
                <label for="prioridad">Prioridad:</label>
                <select name="prioridad" id="prioridad">
                  <option value="Estreno">Estreno</option>
                  <option value="Normal">Normal</option>
                </select>
                <br>
                <label for="calificacion">Calificación:</label>
                <select name="calificacion" id="calificacion">
                  <option value="5">5</option>
                  <option value="4.5">4.5</option>
                  <option value="4">4</option>
                  <option value="3.5">3.5</option>
                  <option value="3">3</option>
                  <option value="2.5">2.5</option>
                  <option value="2">2</option>
                  <option value="1.5">1.5</option>
                  <option value="1">1</option>

                </select>
                <br>
                <label for="name">Fecha:</label>
                <input class="form-control"  type="text" name="name" value="" id="nameInserction">
                <br>
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcion" name="descripcion"  rows="7"></textarea>
                <br>             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" id="add">Agregar</button>
            </div>
          </div>
        </div>
      </div>
      <!--End Modal Inserction -->

      <!--DataTable -->
      <script type="text/javascript">
        jQuery(document).ready(function($){

            var tablePeliculas;
            tablePeliculas=$('#tablaPeliculas').DataTable({
              procesing:false,
              serverSide:false,
                ajax: 
                {
                  "url":"<?php echo $this->url->get('peliculas/datatable')?>",
                  "type":"POST", 
                },
                columns:
                [
                  {data: "id_pelicula"},
                  {data: "nombre_pelicula"},
                  {data: "prioridad"},
                  {
                    sorteable:false,
                    "render":function(data,type,full,meta)
                    {
                      return '<div><button class="btn btn-warning"  onclick="editG(\''+full.id_categoria+'\',\''+full.categoria+'\',\''+full.visible+'\')" data-toggle="modal"   data-target="#modalEdit" > <i class="fa fa-pencil"></i> </button> </div> <button class="btn btn-danger" onclick="deleteG(\''+full.id_categoria+'\',\''+full.visible+'\')"><i class="fa fa-trash"></i> </button> </div>';
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
      </script>
     <script type="text/javascript">
        //function editG(id,categoria,visible){};
    </script>

</div>