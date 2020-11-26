<template>
<div class="container-fluid">

    <div class="card">
        <div class="card-header">

           <h2>Listado de Materias</h2><br/>

            <button class="btn btn-primary btn-lg" type="button" data-toggle="modal"  @click.prevent="abrirnuevo">
                <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Clase
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


      <div>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr class="bg-primary">

                    <th>Numero Control</th>
                    <th>Nombre</th>
                    <th>Información</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <tr v-for ="mat in Materias" :key="mat.id">
                    <td>{{mat.id}}</td>
                    <td>{{mat.Materia}}</td>
                    <td>
                        <button type="button" class="btn btn-success"  data-toggle="modal" @click.prevent="vermodal(mat)">

                          <i class="fa fa-eye fa-2x"></i> Ver
                        </button> &nbsp;


                    <td>
                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" @click.prevent="editarmodal(mat)">

                          <i class="fa fa-edit fa-2x"></i> Editar
                        </button> &nbsp;
                    </td>

                    <td>


                        <button type="button" class="btn btn-danger btn-sm" @click.prevent="eliminarmodal(mat)">
                            <i class="fa fa-trash fa-2x"></i> Eliminar
                        </button>

                    </td>
                </tr>

            </tbody>
        </table>

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

</div>
<div class="modal fade" id="agregarmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Materia</h4>
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


                <form  method="post" enctype="multipart/form-data" class="form-horizontal"  v-on:submit.prevent="CrearAdministrador">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Materia.Materia" class="form-control" placeholder="Ingrese el Nombre" required>

                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                <button type="button" class="btn btn-success" @click="AgregarMateria" ><i class="fa fa-save fa-2x"></i> Guardar</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="vermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Materia</h4>
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


                <form  method="post" enctype="multipart/form-data" class="form-horizontal"  v-on:submit.prevent="CrearAdministrador">
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Numero de Control</label>
                    <div class="col-md-9">
                        <input type="text"  v-model="Materia.id" class="form-control" readonly="readonly">

                    </div>
                </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Materia.Materia" class="form-control" placeholder="Ingrese el Nombre"  readonly="readonly">

                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="eliminarmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Materia</h4>
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


                <form  method="post" enctype="multipart/form-data" class="form-horizontal"  v-on:submit.prevent="CrearAdministrador">
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Numero de Control</label>
                    <div class="col-md-9">
                        <input type="text"  v-model="Materia.id" class="form-control" readonly="readonly">

                    </div>
                </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Materia.Materia" class="form-control" placeholder="Ingrese el Nombre"  required>

                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success" @click="limpiar"><i class="fa fa-times fa-2x"></i> Cerrar</button>
            <button type="button" class="btn btn-danger" @click="eliminar" ><i class="fa fa-trash fa-2x"></i> Eliminar</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="editarmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Materia</h4>
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


                <form  method="post" enctype="multipart/form-data" class="form-horizontal"  v-on:submit.prevent="CrearAdministrador">
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Numero de Control</label>
                    <div class="col-md-9">
                        <input type="text"  v-model="Materia.id" class="form-control" readonly="readonly">

                    </div>
                </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Materia.Materia" class="form-control" placeholder="Ingrese el Nombre"  required>

                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                <button type="button" class="btn btn-success" @click="editarmateria" ><i class="fa fa-save fa-2x"></i> Guardar</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>





</div>



</template>

<script>

    export default {


        mounted() {
            console.log('Component Materias.')
            this.getmateiras();
        },

    data()
    {
        return{
            editmode: false,
           Materias: [],
           Materia: {id: '',Materia: ''},

        }
    },

    methods:{
            getmateiras()
            {
            var urlEstud = "Materias";
            axios.get(urlEstud).then(response =>
            {
              this.Materias = response.data
            });
            },
            abrirnuevo()
            {

            this.limpiar();
            $('#agregarmodal').modal('show');
            },
            limpiar()
            {
            this.Materia.id = "";
            this.Materia.Materia = "";
            },
            AgregarMateria()
            {

              if(this.Materia.Materia == '')
              {
              alert('Debes completar los campos requeridos para poder guardar');
              return;
              }
              else
              {
              const params = {
              Materia: this.Materia.Materia
              }
              var urladmis = "Materias.store";
              axios.post(urladmis,params)
                  }
                      this.getmateiras();

                    this.limpiar();
            $('#agregarmodal').modal('hide');
            },
            cargardatos(mat)
            {
               this.Materia.Materia  = mat.Materia;
             this.Materia.id = mat.id;
            },
            vermodal(mat)
            {
              this.cargardatos(mat);
              $('#vermodal').modal('show');

            },
            editarmodal(mat)
            {
            this.cargardatos(mat)
            $('#editarmodal').modal('show');

            },
            editarmateria()
            {
            const params = {
            id: this.Materia.id,
            Materia: this.Materia.Materia
            }
            var urladmis = "Materias.editar";
            axios.post(urladmis,params)
            this.getmateiras();

            $('#editarmodal').modal('hide');

            },
            eliminarmodal(mat)
            {
            this.cargardatos(mat)
            $('#eliminarmodal').modal('show');
            },
            eliminar()
            {
            const params = {
            id: this.Materia.id,
            Materia: this.Materia.Materia
            }
            var urladmis = "Materias.eliminar";
            axios.post(urladmis,params)
            this.getmateiras();
            $('#eliminarmodal').modal('hide');

            }

    }


    }
</script>
