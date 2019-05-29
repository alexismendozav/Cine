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
      <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#myModal">
         Agregar Categoria
      </button>
       <hr>
       <table class="table" id="tablaCategorias">
         <thead>
           <th>Id</th><th>Categoria</th><th>Visible</th>
         </thead>
         <tbody>
         </tbody>
       </table>

       <!-- Modal Inserction-->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">New Album</h4>
                </div>
                <div class="modal-body">
                  <label for="name">Name:</label>
                  <input class="form-control"  type="text" name="name" value="" id="nameInserction">
                  <br>
                  <label for="author">Author:</label>
                  <input  class="form-control"  type="text" name="author" value="" id="authorInserction">
                  <br>
                  <label for="genre">Genre:</label>
                  <select class="form-control" id="optionGenre">
                 
                    <option  value="" ></option>
                 
                  </select>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="btnSave" >Save changes</button>
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
                
              });
          });
        </script>

  </div>