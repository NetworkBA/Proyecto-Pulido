<template>



<div>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr class="bg-primary">

                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Cambiar Estado</th>
                </tr>
            </thead>
            <tbody>

                <tr v-for ="admi in admis">
                    <td>{{admi.id}}</td>
                    <td>{{admi.Nombre +" "+ admi.Apellido_P + " "+ admi.Apellido_M}}</td>
                    <td>categoria</td>
                    <td>descripcion</td>
                    <td>
                        <button type="button" class="btn btn-success btn-md">

                          <i class="fa fa-check fa-2x"></i> Activo
                        </button>

                    </td>

                    <td>
                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#abrirmodal">

                          <i class="fa fa-edit fa-2x"></i> Editar
                        </button> &nbsp;
                    </td>

                    <td>


                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="fa fa-lock fa-2x"></i> Desactivar
                        </button>

                    </td>
                </tr>

            </tbody>
        </table>


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
                        <label class="col-md-3 form-control-label" for="text-input">Administrativo</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Nombre de Administrativo">

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
</div>



</template>

<script>
    export default {


        mounted() {
            console.log('Component ad1.')
            this.getadmis()
        },

    data()
    {
        return{
           admis: []
        }
    },

    methods:{
            getadmis(){
            var urladmis = "Administrativo";
            axios.get(urladmis).then(response =>
            {
              this.admis = response.data
            });
            },
    }


    }
</script>
