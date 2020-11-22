<template>
<main class="main">
     <!-- Breadcrumb -->
     <ol class="breadcrumb">
         <li class="breadcrumb-item active"><a href="/">BACKEND - SISTEMA DE COMPRAS - VENTAS</a></li>
     </ol>
     <div class="container-fluid">
         <!-- Ejemplo de tabla Listado -->
         <div class="card">
             <div class="card-header">

                <h2>Listado de Categorías</h2><br/>

                 <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                     <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Categoría
                 </button>
             </div>
             <div class="card-body">
                 <div class="form-group row">
                     <div class="col-md-6">
                         <div class="input-group">
                             <select class="form-control col-md-3">
                     <option value="nombre">Categoría</option>
                               <option value="descripcion">Descripción</option>
                             </select>
                             <input type="text" class="form-control" placeholder="Buscar texto">
                             <button type="submit"  class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                         </div>
                     </div>
                 </div>

                  <Administrativos></Administrativos>



                 <nav>
                     <ul class="pagination">
                         <li class="page-item">
                             <a class="page-link" href="#">Anterior</a>
                         </li>
                         <li class="page-item active">
                             <a class="page-link" href="#">1</a>
                         </li>
                         <li class="page-item">
                             <a class="page-link" href="#">2</a>
                         </li>
                         <li class="page-item">
                             <a class="page-link" href="#">3</a>
                         </li>
                         <li class="page-item">
                             <a class="page-link" href="#">4</a>
                         </li>

                         <li class="page-item">
                             <a class="page-link" href="#">Siguiente</a>
                         </li>
                     </ul>
                 </nav>
             </div>
         </div>
         <!-- Fin ejemplo de tabla Listado -->
     </div>
     <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
         <div class="modal-dialog modal-primary modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title">Agregar categoría</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                     </button>
                 </div>

                 <div class="modal-body">

                     <div class="form-group row div-error">

                         <div class="text-center text-error">

                             <div></div>

                         </div>

                     </div>


                     <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                         <div class="form-group row">
                             <label class="col-md-3 form-control-label" for="text-input">Categoría</label>
                             <div class="col-md-9">
                                 <input type="text" class="form-control" placeholder="Nombre de categoría">

                             </div>
                         </div>
                         <div class="form-group row">
                             <label class="col-md-3 form-control-label" for="email-input">Descripción</label>
                             <div class="col-md-9">
                             <input type="email" class="form-control" placeholder="Ingrese descripcion">
                             </div>
                         </div>


                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                     <button type="button" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>

                 </div>
             </div>
             <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
     </div>


     </main>
</template>

<script>
    export default {
      

        mounted() {
            console.log('Component Administrativo.')
        }
    }
</script>
