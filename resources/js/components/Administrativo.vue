<template>
<main class="main">
     <!-- Breadcrumb -->
     <div class="container-fluid">
         <!-- Ejemplo de tabla Listado -->
         <div class="card">
             <div class="card-header">

                <h2>Listado de Administrativos</h2><br/>

                 <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal2">
                     <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Administrativo
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
     <div class="modal fade" id="abrirmodal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
         <div class="modal-dialog modal-primary modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title">Agregar Administrativo</h4>
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
                             <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                             <div class="col-md-9">
                                 <input type="text" name="Nombre" class="form-control" placeholder="Ingrese el Nombre">

                             </div>
                         </div>
                         <div class="form-group row">
                             <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                             <div class="col-md-9">
                             <input type="text" name="Apellido_P" class="form-control" placeholder="Ingrese Apellido Paterno">
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                             <div class="col-md-9">
                             <input type="text" name="Apellido_M" class="form-control" placeholder="Ingrese Materno">
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                             <div class="col-md-9">
                             <input type="text" name="CURP" class="form-control" placeholder="Ingrese CURP">
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-3 form-control-label" for="email-input">Contraseña</label>
                             <div class="col-md-9">
                             <input type="password" name="Contraseña" class="form-control" placeholder="Ingrese Contraseña">
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-3 form-control-label" for="email-input">Validación de Contraseña</label>
                             <div class="col-md-9">
                             <input type="password" name= "Contraseña2" class="form-control" placeholder="Ingrese Contraseña">
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
