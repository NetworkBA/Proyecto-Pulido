<template>
<div class="container-fluid">

    <div class="card">
        <div class="card-header">

           <h2>Listado de Padre de Familias</h2><br/>

            <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal2">
                <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Padre de Familia
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
                    <th>CURP</th>
                    <th>Información</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <tr v-for ="admi in admis" :key="admi.id">
                    <td>{{admi.id}}</td>
                    <td>{{admi.Nombre +" "+ admi.Apellido_P + " "+ admi.Apellido_M}}</td>
                    <td>{{admi.CURP}}</td>
                    <td>
                        <button type="button" class="btn btn-success"  data-toggle="modal" @click.prevent="veradmi(admi)">

                          <i class="fa fa-eye fa-2x"></i> Ver
                        </button> &nbsp;


                    <td>
                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" @click.prevent="editaradmi(admi)">

                          <i class="fa fa-edit fa-2x"></i> Editar
                        </button> &nbsp;
                    </td>

                    <td>


                        <button type="button" class="btn btn-danger btn-sm" @click.prevent="eliminarmodal(admi)">
                            <i class="fa fa-trash fa-2x"></i> Eliminar
                        </button>

                    </td>
                </tr>

            </tbody>
        </table>

        
    </div>
</div>

</div>
<div class="modal fade" id="abrirmodal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Padre de Familia</h4>
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


                <form  method="post" enctype="multipart/form-data" class="form-horizontal  v-on:submit.prevent="CrearAdministrador">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="administrativo.Nombre" class="form-control" placeholder="Ingrese el Nombre">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                        <div class="col-md-9">
                        <input type="text" v-model="administrativo.Apellido_P" class="form-control" placeholder="Ingrese Apellido Paterno">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                        <div class="col-md-9">
                        <input type="text" v-model="administrativo.Apellido_M" class="form-control" placeholder="Ingrese Apellido Materno">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Correo Electronico</label>
                        <div class="col-md-9">
                        <input type="email" v-model="administrativo.email" class="form-control" placeholder="Ingrese un correo electronico">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                        <div class="col-md-9">
                        <input type="text" v-model="administrativo.CURP" class="form-control" placeholder="Ingrese CURP">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Contraseña</label>
                        <div class="col-md-9">
                        <input type="password" v-model="administrativo.Contraseña" class="form-control" placeholder="Ingrese Contraseña">
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
                <button type="button" class="btn btn-success" @click="CrearAdministrador" ><i class="fa fa-save fa-2x"></i> Guardar</button>

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
                          <h4 class="modal-title">Ver Padre de Familia</h4>
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


                          <form @submit.prevent="editmode" method="post" enctype="multipart/form-data" class="form-horizontal">


                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="text-input">Numero de Control</label>
                              <div class="col-md-9">
                                  <input type="text" id="id_Model" class="form-control" readonly="readonly">

                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                              <div class="col-md-9">
                                  <input type="text" id="Nombre_Model"  class="form-control" readonly="readonly">

                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                              <div class="col-md-9">
                              <input type="text"  id="Apellido_P_Model"  class="form-control" placeholder="Ingrese Apellido Paterno" readonly="readonly">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                              <div class="col-md-9">
                              <input type="text" id="Apellido_M_Model"  class="form-control" placeholder="Ingrese Apellido Materno" readonly="readonly">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Correo Electronico</label>
                              <div class="col-md-9">
                              <input type="text"  v-model="administrativo.email" class="form-control" readonly="readonly" >
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Contraseña</label>
                              <div class="col-md-9">
                              <input type="password" v-model="administrativo.Contraseña" class="form-control" placeholder="Ingrese Contraseña" readonly="readonly">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                              <div class="col-md-9">
                              <input type="text" id="CURP_Model"  class="form-control" placeholder="Ingrese CURP" readonly="readonly">
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

          <div class="modal fade" id="editarmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-primary modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Editar Padre de Familia</h4>
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


                          <form @submit.prevent="editmode" method="post" enctype="multipart/form-data" class="form-horizontal">


                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="text-input">Numero de Control</label>
                              <div class="col-md-9">
                                  <input type="number" id="id_Modele" v-model="administrativo.id" class="form-control" readonly="readonly">

                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                              <div class="col-md-9">
                                  <input type="text" id="Nombre_Modele" v-model="administrativo.Nombre "class="form-control" >

                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                              <div class="col-md-9">
                              <input type="text"  id="Apellido_P_Modele" v-model="administrativo.Apellido_P" class="form-control"  >
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                              <div class="col-md-9">
                              <input type="text" id="Apellido_M_Modele" v-model="administrativo.Apellido_M" class="form-control" >
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Correo Electronico</label>
                              <div class="col-md-9">
                              <input type="text"  v-model="administrativo.email" class="form-control"  >
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Contraseña</label>
                              <div class="col-md-9">
                              <input type="password" v-model="administrativo.Contraseña" class="form-control" placeholder="Ingrese Contraseña">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                              <div class="col-md-9">
                              <input type="text" id="CURP_Modele" v-model="administrativo.CURP" class="form-control" >
                              </div>
                          </div>

                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                          <button type="button" class="btn btn-success" @click="GuardarAdmi" ><i class="fa fa-save fa-2x"></i> Guardar</button>


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
                          <h4 class="modal-title">Eliminar Padre de Familia</h4>
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


                          <form @submit.prevent="editmode" method="post" enctype="multipart/form-data" class="form-horizontal">


                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="text-input">Numero de Control</label>
                              <div class="col-md-9">
                                  <input type="number" id="id_Modele" v-model="administrativo.id" class="form-control" readonly="readonly">

                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                              <div class="col-md-9">
                                  <input type="text" id="Nombre_Modele" v-model="administrativo.Nombre "class="form-control" readonly="readonly">

                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                              <div class="col-md-9">
                              <input type="text"  id="Apellido_P_Modele" v-model="administrativo.Apellido_P" class="form-control"  readonly="readonly">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                              <div class="col-md-9">
                              <input type="text" id="Apellido_M_Modele" v-model="administrativo.Apellido_M" class="form-control" readonly="readonly">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Correo Electronico</label>
                              <div class="col-md-9">
                              <input type="text"  v-model="administrativo.email" class="form-control" readonly="readonly" >
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">Contraseña</label>
                              <div class="col-md-9">
                              <input type="password" v-model="administrativo.Contraseña" class="form-control" placeholder="Ingrese Contraseña">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                              <div class="col-md-9">
                              <input type="text" id="CURP_Modele" v-model="administrativo.CURP" class="form-control"  readonly="readonly">
                              </div>
                          </div>

                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                          <button type="button" class="btn btn-danger" @click="deleteAdmi" ><i class="fa fa-trash fa-2x"></i> Eliminar</button>


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
            console.log('Component Padres secundarios.')
            this.getadmis()
        },

    data()
    {
        return{
            editmode: false,
           admis: [],
           administrativo: {id: '',Nombre: '',Apellido_P: '', Apellido_M: '', CURP: '', Apellido_M: '', CURP:'',
           Contraseña : ''},

        }
    },

    methods:{

    CrearAdministrador()
        {
          console.log(this.administrativo.Nombre, this.administrativo.Apellido_P, this.administrativo.Apellido_M, this.administrativo.CURP, this.administrativo.Contraseña);
          var urladmis = "Padre.Crear";
          const params = {
           id: this.administrativo.id,
           Nombre: this.administrativo.Nombre ,
           Apellido_P: this.administrativo.Apellido_P,
           Apellido_M: this.administrativo.Apellido_M,
           CURP: this.administrativo.CURP,
           email: this.administrativo.email,
           contraseña: this.administrativo.Contraseña
          }
          axios.post(urladmis,params)
          this.$forceUpdate();
          var urladmis = "Padre";

          axios.get(urladmis).then(response =>
          {
            this.admis = response.data
          });
          $('#abrirmodal2').modal('hide');

        },
            getadmis(){
            var urladmis = "Padre";
            axios.get(urladmis).then(response =>
            {
              this.admis = response.data
            });
            },
            veradmi(adm)
            {
              this.editmode = true;
              console.log(adm.id);
              $(id_Model).val(adm.id);
              $(Nombre_Model).val(adm.Nombre);
              $(Apellido_P_Model).val(adm.Apellido_P);
              $(Apellido_M_Model).val(adm.Apellido_M);
              $(CURP_Model).val(adm.CURP);
              this.administrativo.email = adm.usuario;

                $('#vermodal').modal('show');
            },
            editaradmi(admi)
            {
                this.editmode = true;

                console.log(admi.id);
                this.administrativo.id = admi.id;
                this.administrativo.Nombre = admi.Nombre;
                this.administrativo.Apellido_M = admi.Apellido_M;
                this.administrativo.CURP = admi.CURP;
                this.administrativo.Apellido_P = admi.Apellido_P;
                this.administrativo.email = admi.usuario;

                $('#editarmodal').modal('show');
            },
            GuardarAdmi()
            {
                this.editmode = true;
                var urladmis = "Padre.Editar";

                const params = {
                 id: this.administrativo.id,
                 Nombre: this.administrativo.Nombre ,
                 Apellido_P: this.administrativo.Apellido_P,
                 Apellido_M: this.administrativo.Apellido_M,
                 CURP: this.administrativo.CURP,
                 email: this.administrativo.email,
                 contraseña: this.administrativo.Contraseña

                }
                axios.post(urladmis,params);
                var urladmis = "Padre";
                axios.get(urladmis).then(response =>
                {
                  this.admis = response.data
                });
                $('#editarmodal').modal('hide');
            },

            eliminarmodal(admi)
            {

            this.administrativo.email = admi.usuario;
            this.administrativo.id = admi.id;
            this.administrativo.Nombre = admi.Nombre;
            this.administrativo.Apellido_M = admi.Apellido_M;
            this.administrativo.CURP = admi.CURP;
            this.administrativo.Apellido_P = admi.Apellido_P;
            $('#eliminarmodal').modal('show');
            },


            deleteAdmi()
            {
            const params = {
             id: this.administrativo.id,
             Nombre: this.administrativo.Nombre ,
             Apellido_P: this.administrativo.Apellido_P,
             Apellido_M: this.administrativo.Apellido_M,
             CURP: this.administrativo.CURP

            }
                    console.log(this.administrativo.id);
                    var urladmis = "Padre.Destroy";
                    axios.post(urladmis, params);
                    var urladmis = "Padre";

                    axios.get(urladmis).then(response =>
                    {
                      this.admis = response.data
                    });
                    $('#eliminarmodal').modal('hide');
            }
    }


    }
</script>
