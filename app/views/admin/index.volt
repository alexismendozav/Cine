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
        <li class="nav-item active">
          <a class="nav-link" href="admin">Peliculas
            <span class="sr-only">(current)</span>   
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proyecciones">Proyecciones</a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link" href="categorias">Categorias

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
    <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#modalAdd">
       Agregar pelicula
    </button>
     <hr>
     <table class="table" id="tablaPeliculas">
       <thead>
         <th>Id</th><th>Pelicula</th><th>Duracion</th><th>Clasificacion</th><th>Categoria</th><th>Prioridad</th><th>Fecha</th><th>Opciones</th>
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
                <select  class="form-control" name="clasificacion" id="clasificacion">
                    {% for clasificacion in clasificaciones %}
                      <option value="{{clasificacion.id_clasificacion}}">{{clasificacion.clasificacion}}</option>
                    {% endfor %}
                </select>
                <br>
                <label for="categoria">Categoria:</label>
                <select  class="form-control" name="categoria" id="categoria">
                    {% for categoria in categorias %}
                    <option value="{{categoria.id_categoria}}">{{categoria.categoria}} </option>
                    {% endfor %}
                </select>
                <br>
                <label for="idioma">Idioma</label>
                <select  class="form-control" name="idioma" id="idioma">
                  <option value="EN">EN</option>
                  <option value="ESP">ESP</option>
                </select>
                <br>
                <label for="prioridad">Prioridad:</label>
                <select  class="form-control" name="prioridad" id="prioridad">
                  <option  class="form-control" value="ESTRENO">ESTRENO</option>
                  <option  class="form-control" value="NORMAL">NORMAL</option>
                </select>
                <br>
                <label for="calificacion">Calificación:</label>
                <select   class="form-control" name="calificacion" id="calificacion">
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
                <input class="form-control" placeholder="YYYY-MM-AA" type="text" name="name" value="" id="fechaInserction">
                <br>
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcion" name="descripcion"  rows="7"></textarea>
                <br>             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" id="btnAdd">Agregar</button>
            </div>
          </div>
        </div>
      </div>
      <!--End Modal Inserction -->
      
       <!-- Modal Update-->
     <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Pelicula</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <label for="name">Nombre:</label>
                <input class="form-control"  type="hidden" name="name" value="" id="idEdit">
                <input class="form-control"  type="text" name="name" value="" id="nameEdit">
                <br>
                <label for="imagen">Link de la imagen de la pelicula:</label>
                <input class="form-control"  type="text" name="imagen" value="" id="imagenEdit">
                <br>
                <label for="triler">Link del trailer:</label>
                <input class="form-control"  type="text" name="triler" value="" id="trilerEdit">
                <br>
                <label for="duracion">Tiempo de duracion (min):</label>
                <input class="form-control"  type="text" name="duracion" value="" id="duracionEdit">
                <br>
                <label for="clasificacion">Clasificación:</label>
                <select  class="form-control" name="clasificacion" id="clasificacionEdit">
                    {% for clasificacion in clasificaciones %}
                      <option value="{{clasificacion.id_clasificacion}}">{{clasificacion.clasificacion}}</option>
                    {% endfor %}
                </select>
                <br>
                <label for="categoria">Categoria:</label>
                <select  class="form-control" name="categoria" id="categoriaEdit">
                    {% for categoria in categorias %}
                    <option value="{{categoria.id_categoria}}">{{categoria.categoria}} </option>
                    {% endfor %}
                </select>
                <br>
                <label for="idioma">Idioma</label>
                <select  class="form-control" name="idioma" id="idiomaEdit">
                  <option value="EN">EN</option>
                  <option value="ESP">ESP</option>
                </select>
                <br>
                <label for="prioridad">Prioridad:</label>
                <select  class="form-control" name="prioridad" id="prioridadEdit">
                  <option  class="form-control" value="ESTRENO">ESTRENO</option>
                  <option  class="form-control" value="NORMAL">NORMAL</option>
                </select>
                <br>
                <label for="calificacion">Calificación:</label>
                <select   class="form-control" name="calificacion" id="calificacionEdit">
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
                <input class="form-control"  type="text" name="name" value="" id="fechaEdit">
                <br>
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcionEdit" name="descripcion"  rows="7"></textarea>
                <br>             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" id="btnEdit">Guardar</button>
            </div>
          </div>
        </div>
     </div>
      <!--End Modal Update -->

       <!-- Modal Delete-->
       <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Pelicula</h5>
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
          var categorias=[];
          var clasificaciones=[];
          var nameCategorias = [];
          var nameClasificaciones =[];
          $.ajax({
            "url": "<?php echo $this->url->get('categorias/datatable') ?>",
            "type": "POST",
            dataType: "json",
              success: function(data){
                var response = Object.values(data);
                for(var i=0; i<response[0].length;i++){
                  categorias.push(Object.values(response[0][i]));            
                }
                for(var i=0; i<categorias.length;i++){
                  var id = categorias[i][0];
                  var name = categorias[i][1];
                  nameCategorias[categorias[i][0]] = categorias[i][1];
                }             
              }
            });
        
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
                  {data: "duracion"},
                  {data: "clasificacion"},
                  {data: "categoria",
                  "render": function(data,type,row){
                      var name= nameCategorias[data];
                      return name;
                  }
                  },
                  {data: "prioridad"},
                  {data: "fecha"},
                  {
                    sorteable:false,
                    "render":function(data,type,full,meta)
                    {
                      return '<div><button class="btn btn-warning" onclick="editPelicula(\''+full.id_pelicula+'\',\''+full.nombre_pelicula+'\',\''+full.imagen+'\',\''+full.triler+'\',\''+full.duracion+'\',\''+full.calificacion+'\',\''+full.categoria+'\',\''+full.idioma+'\',\''+full.prioridad+'\',\''+full.calificacion+'\',\''+full.fecha+'\',\''+full.descripcion+'\')" data-toggle="modal"   data-target="#modalEdit" > <i class="fa fa-pencil"></i> </button> </div> <button class="btn btn-danger" onclick="deletePelicula(\''+full.id_pelicula+'\',\''+full.nombre_pelicula+'\')"><i class="fa fa-trash"></i> </button> </div>';
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

        $("#btnAdd").click(function() {
            var nombre = $('#nameInserction').val();
            var imagen = $('#imagenInserction').val();
            var triler = $('#trilerInserction').val();           
            var duracion = $('#duracionInserction').val();
            var clasificacion = $('#clasificacion').val();
            var categoria = $('#categoria').val();
            var idioma = $('#idioma').val();
            var prioridad = $('#prioridad').val();
            var calificacion = $('#calificacion').val();
            var fecha = $('#fechaInserction').val();
            var descripcion = $('#descripcion').val();
        
            addPelicula(nombre,imagen,triler,duracion,clasificacion,categoria,idioma,prioridad,calificacion,fecha,descripcion);
           
            $("#modalAdd").modal('hide');     
          });

        $("#btnEdit").click(function() {
            var id = $('#idEdit').val();
            var nombre = $('#nameEdit').val();
            var imagen = $('#imagenEdit').val();
            var triler = $('#trilerEdit').val();           
            var duracion = $('#duracionEdit').val();
            var clasificacion = $('#clasificacionEdit').val();
            var categoria = $('#categoriaEdit').val();
            var idioma = $('#idiomaEdit').val();
            var prioridad = $('#prioridadEdit').val();
            var calificacion = $('#calificacionEdit').val();
            var fecha = $('#fechaEdit').val();
            var descripcion = $('#descripcionEdit').val();
        
            editarPelicula(id,nombre,imagen,triler,duracion,clasificacion,categoria,idioma,prioridad,calificacion,fecha,descripcion);
            setTimeout(function(){tablePeliculas.ajax.reload(null,false);},500);
            $("#modalEditar").modal('hide');     
          });

          $( "#btnEliminar" ).click(function() {
            var id = $('#idEliminar').val();         
            eliminarPelicula(id);
            $("#modalEliminar").modal('hide');      
          });
      </script>
     <script type="text/javascript">
     
          function editPelicula(id,nombre,imagen,triler,duracion,clasificacion,categoria,idioma,prioridad,calificacion,fecha,descripcion){
             $('#idEdit').val(id);
             $('#nameEdit').val(nombre);
             $('#imagenEdit').val(imagen);
             $('#trilerEdit').val(triler);           
             $('#duracionEdit').val(duracion);
             $('#clasificacionEdit').val(clasificacion);
             $('#categoriaEdit').val(categoria);
             $('#idiomaEdit').val(idioma);
             $('#prioridadEdit').val(prioridad);
             $('#calificacionEdit').val(calificacion);
             $('#fechaEdit').val(fecha);
             $('#descripcionEdit').val(descripcion);
            $("#modalEditar").modal('show'); 
             
          }
          function deletePelicula(id,nombre){
            $('#idEliminar').val(id);
            document.getElementById("lblEliminar").innerHTML = "¿Estas seguro que deseas eliminar la pelicula " + nombre + " ?";
            $("#modalEliminar").modal('show');
          }

          function addPelicula(nombre,imagen,triler,duracion,clasificacion,categoria,idioma,prioridad,calificacion,fecha,descripcion)
          {
            $.ajax({
              type:"POST",
              url:"<?php echo $this->url->get('admin/addAjax')?>",
              data:{nombre:nombre,imagen:imagen,triler:triler,duracion:duracion,clasificacion:clasificacion,
              categoria:categoria,idioma:idioma,prioridad:prioridad,calificacion:calificacion,
              fecha:fecha,descripcion:descripcion
              }
            }).done(function(data){
              Swal.fire('Pelicula Agregada');
            });
          }

          function editarPelicula(id,nombre,imagen,triler,duracion,clasificacion,categoria,idioma,prioridad,calificacion,fecha,descripcion)
          {
            $.ajax({
              type:"POST",
              url:"<?php echo $this->url->get('admin/updateAjax')?>",
              data:{id:id,nombre:nombre,imagen:imagen,triler:triler,duracion:duracion,clasificacion:clasificacion,
              categoria:categoria,idioma:idioma,prioridad:prioridad,calificacion:calificacion,
              fecha:fecha,descripcion:descripcion,
              success: function (response) {
                  $("#datos_main_buscador").html(response);
                },
                error: function (error) {
                  console.log(error);
                }
              }
            }).done(function(data){
              Swal.fire('Pelicula Actualizada');
            });
          }
          
          function eliminarPelicula(id){
            $.ajax({
              type:"POST",
                url:"<?php echo $this->url->get('admin/deleteAjax') ?>",
                data:{id:id} 
            }).done(function(data){
              Swal.fire('Pelicula Eliminada');
          });
          }
     </script>

</div>