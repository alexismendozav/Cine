<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" style="width: 35px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="admin">Peliculas
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="proyecciones">Proyecciones</a>
        </li>
        <li class="nav-item active ">
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
  <button type="button" id="btnModalAd" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#modalAdd">
    Agregar Categoria
  </button>
  <hr>
  <table class="table" id="tablaCategorias">
    <thead>
      <th>Id</th>
      <th>Categoria</th>
      <th>Visible</th>
      <th>Options</th>
    </thead>
    <tbody>
    </tbody>
  </table>


  <!-- Modal Inserction-->
  <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="nameAdd">Nombre:</label>
          <input class="form-control" type="text" name="name" value="" id="nameAdd">
          <br>
          <label for="visibleAdd">Visible:</label>
          <select class="form-control" id="visibleAdd">
            <option value="SI">SI</option>
            <option value="NO">NO</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-dark" id="btnAdd">Agregar categoria</button>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal Inserction -->


  <!-- Modal Edit-->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="nameAdd">Nuevo Nombre:</label>
          <input class="form-control" type="hidden" name="name" value="" id="id">
          <input class="form-control" type="text" name="name" value="" id="nameEditar">
          <br>
          <label for="visibleAdd">Visible:</label>
          <select class="form-control" id="visibleEditar">
            <option value="SI">SI</option>
            <option value="NO">NO</option>
          </select>
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
  <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <input class="form-control" type="hidden" name="name" value="" id="idEliminar">

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
    jQuery(document).ready(function ($) {

      var tableCategorias = $('#tablaCategorias').DataTable({
        procesing: false,
        serverSide: false,
        ajax: {
          "url": "<?php echo $this->url->get('categorias/datatable')?>",
          "type": "POST",
        },
        columns: [{
            data: "id_categoria"
          },
          {
            data: "categoria"
          },
          {
            data: "visible"
          },
          {
            sorteable: false,
            "render": function (data, type, full, meta) {
              return '<div><button class="btn btn-warning"  onclick="editCategoria(\'' + full.id_categoria +
                '\',\'' + full.categoria + '\',\'' + full.visible +
                '\')" data-toggle="modal"   data-target="#modalEdit" > <i class="fa fa-pencil"></i> </button> </div> <button class="btn btn-danger" onclick="deleteCategoria(\'' +
                full.id_categoria + '\',\'' + full.categoria +
                '\')"><i class="fa fa-trash"></i> </button> </div>';
            }
          }
        ],
        "language": {
          "lengthMenu": "Mostrar _MENU_ resultados por pagina",
          "zeroRecords": "Ninguna coincidencia - Intente nuevamente",
          "info": "Mostrando pagina _PAGE_ de _PAGES_",
          "infoEmpty": "Sin información disponible",
          "search": "Buscar:",
          "infoFiltered": "(filtrado del total de _MAX_ registros)"
        }
      });

      $("#btnEditar").click(function () {
        var id = $('#id').val();
        var name = $('#nameEditar').val();
        var visible = $('#visibleEditar').val();
        editarCategoria(id, name, visible);

        $("#modalEditar").modal('hide');
        setTimeout(function () {
          tableCategorias.ajax.reload();
        }, 1000);
      });


      $("#btnAdd").click(function () {
        var name = $('#nameAdd').val();
        var visible = $('#visibleAdd').val();
        addCategoria(name, visible);

        $("#modalAdd").modal('hide');
        setTimeout(function () {
          tableCategorias.ajax.reload();
        }, 1000);
      });



      $("#btnEliminar").click(function () {
        var id = $('#idEliminar').val();
        eliminarCategoria(id);
        setTimeout(function () {
          tableCategorias.ajax.reload();
        }, 1000);
        $("#modalEliminar").modal('hide');
      });

    });
  </script>
  <script type="text/javascript">
    function editCategoria(id, categoria, visible) {
      $('#id').val(id);
      $('#nameEditar').val(categoria);
      $('#visibleEditar').val(visible);
      $("#modalEditar").modal('show');
    }

    function deleteCategoria(id, categoria) {
      $('#idEliminar').val(id);
      document.getElementById("lblEliminar").innerHTML = "¿Estas seguro que deseas eliminar la categoria " + categoria +
        " ?";
      $("#modalEliminar").modal('show');
    }

    function addCategoria(name, visible) {
      $.ajax({
        type: "POST",
        url: "<?php echo $this->url->get('categorias/addAjax')?>",
        data: {
          name: name,
          visible: visible
        }
      }).done(function (data) {
        Swal.fire('Categoria agregada');
      });
    }

    function editarCategoria(id, newName, newVisible) {
      $.ajax({
        type: "POST",
        url: "<?php echo $this->url->get('categorias/editAjax') ?>",
        data: {
          id: id,
          name: newName,
          visible: newVisible
        }
      }).done(function (data) {
        Swal.fire('Categoria Actualizada');
      });
    }

    function eliminarCategoria(id) {
      $.ajax({
        type: "POST",
        url: "<?php echo $this->url->get('categorias/deleteAjax') ?>",
        data: {
          id: id
        }
      }).done(function (data) {
        Swal.fire('Categoria Eliminada');
      });
    }
  </script>

</div>