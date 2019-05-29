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
            <a class="nav-link" href="proyecciones">Proyecciones</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="categorias">Categorias
                <span class="sr-only">(current)</span>
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
  
  <!-- Page Content -->
  <div class="container">
    <br>
      <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#modalAdd">
         Agregar Categoria
      </button>
       <hr>
       <table class="table" id="tablaCategorias">
         <thead>
           <th>Id</th><th>Categoria</th><th>Visible</th><th>Options</th>
         </thead>
         <tbody>
         </tbody>
       </table>
      
   
       <!-- Modal Inserction-->
       <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <label for="name">Nombre:</label>
                  <input class="form-control"  type="text" name="name" value="" id="nameInserction">
                  <br>
                  <label for="genre">Visible:</label>
                  <select class="form-control" id="optionGenre">           
                    <option  value="SI" >SI</option>
                    <option  value="NO" >NO</option>
                   </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="add">Agregar categoria</button>
              </div>
            </div>
          </div>
        </div>
        <!--End Modal Inserction -->

        <!--DataTable -->
        <script type="text/javascript">
          jQuery(document).ready(function($){
              var tableCategorias;
              tableCategorias=$('#tablaCategorias').DataTable({
                procesing:false,
                serverSide:false,
                  ajax: 
                  {
                    "url":"<?php echo $this->url->get('categorias/datatable')?>",
                    "type":"POST", 
                  },
                  columns:
                  [
                    {data: "id_categoria"},
                    {data: "categoria"},
                    {data: "visible"},
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
          function editG(id,categoria,visible){};
      </script>

  </div>