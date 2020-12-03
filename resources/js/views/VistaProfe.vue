<template>
<div class="container-fluid">

    <div class="card">
        <div class="card-header">

           <h2>Listado de Clases</h2><br/>



      <div>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr class="bg-primary">

                    <th>Numero Control</th>
                    <th>Nombre</th>
                    <th>Información</th>

                </tr>
            </thead>
            <tbody>

                <tr v-for ="clas in Clases" :key="clas.id">
                    <td>{{clas.id}}</td>
                    <td>{{clas.Materia}}</td>

                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" @click.prevent="editarabrir(clas)">

                          <i class="fa fa-edit fa-2x"></i> Ver
                        </button> &nbsp;
                    </td>


                </tr>

            </tbody>
        </table>


    </div>
    </div>

    </div>


    <div class="modal fade" id="editarmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title">Listado de Actividades</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <button class="btn btn-primary btn-lg" type="button" data-toggle="modal"  @click.prevent="abrirnuevatarea">
                    <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Actividad
                </button>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div></div>

                        </div>

                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Número de Control</label>
                        <div class="col-md-9">
                            <input type="number"  v-model="Clase.id" class="form-control" readonly="readonly">

                        </div>
                    </div>

                    <form  method="post" enctype="multipart/form-data" class="form-horizontal"  >




                        <div>

                           <h2>Listado de Tareas</h2><br/>


                      <div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr class="bg-primary">

                                    <th>Numero Control</th>
                                    <th>Nombre</th>
                                    <th>Valor</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr v-for ="tarea in Tareas" :key="tarea.id">
                                    <td>{{tarea.id}}</td>
                                    <td>{{tarea.Nombre}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success"  data-toggle="modal" @click.prevent="Veractividad(tarea)">

                                          <i class="fa fa-eye fa-2x"></i> Ver
                                        </button> &nbsp;


                                    <td>
                                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" @click.prevent="editartarea(tarea)">

                                          <i class="fa fa-edit fa-2x"></i> Editar
                                        </button> &nbsp;
                                    </td>

                                    <td>


                                        <button type="button" class="btn btn-danger btn-sm" @click.prevent="eliminartarea(tarea)">
                                            <i class="fa fa-trash fa-2x"></i> Eliminar
                                        </button>

                                    </td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                    </div>






                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"  @click="cerrareditar()" ><i class="fa fa-times fa-2x"></i> Cerrar</button>
                    <button type="button" class="btn btn-success" @click="capturar" ><i class="fa fa-save fa-2x"></i> Guardar</button>
                </div>
                </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div class="modal fade" id="agregartareamodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title">Agregar Tarea</h4>
                    <button type="button" class="close" data-dismiss="modal" @click="limpiar()" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div>
                            </div>



                        </div>

                    </div>


                    <form  method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Número de Control</label>
                        <div class="col-md-9">
                            <input type="number"  v-model="Clase.id" class="form-control"  readonly="readonly">

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre de Actividad</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Tarea.nombre" class="form-control" placeholder="Ingrese el Nombre de la Actividad" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Descripción</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Tarea.descripcion" class="form-control" placeholder="Ingrese la descripcion" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Valor</label>
                        <div class="col-md-9">
                            <input type="number" v-model="Tarea.valor" class="form-control" placeholder="Ingrese el Valor" required>

                        </div>
                    </div>


                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                    <button type="button" class="btn btn-success" @click="AgregarActividad" ><i class="fa fa-save fa-2x"></i> Guardar</button>
                </div>
                </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="editartareaamodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title">Agregar Tarea</h4>
                    <button type="button" class="close" data-dismiss="modal" @click="limpiar()" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div>
                            </div>



                        </div>

                    </div>


                    <form  method="post" enctype="multipart/form-data" class="form-horizontal">


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Número de Control Actividad</label>
                        <div class="col-md-9">
                            <input type="number"  v-model="Tarea.id" class="form-control"  readonly="readonly">

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre de Actividad</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Tarea.nombre" class="form-control" placeholder="Ingrese el Nombre de la Actividad" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Descripción</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Tarea.descripcion" class="form-control" placeholder="Ingrese la descripcion" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Valor</label>
                        <div class="col-md-9">
                            <input type="number" v-model="Tarea.valor" class="form-control" placeholder="Ingrese el Valor" required>

                        </div>
                    </div>


                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                    <button type="button" class="btn btn-success" @click="EditarActividad" ><i class="fa fa-save fa-2x"></i> Guardar</button>
                </div>
                </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="vertareamodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title">Agregar Tarea</h4>
                    <button type="button" class="close" data-dismiss="modal" @click="limpiar()" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div>
                            </div>



                        </div>

                    </div>


                    <form  method="post" enctype="multipart/form-data" class="form-horizontal">


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Número de Control Actividad</label>
                        <div class="col-md-9">
                            <input type="number"  v-model="Tarea.id" class="form-control"  readonly="readonly">

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre de Actividad</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Tarea.nombre" class="form-control" placeholder="Ingrese el Nombre de la Actividad" required readonly="readonly">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Descripción</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Tarea.descripcion" class="form-control" placeholder="Ingrese la descripcion" required readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Valor</label>
                        <div class="col-md-9">
                            <input type="number" v-model="Tarea.valor" class="form-control" placeholder="Ingrese el Valor" required readonly="readonly">

                        </div>
                    </div>


                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                </div>
                </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div class="modal fade" id="eliminartareamodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title">Agregar Tarea</h4>
                    <button type="button" class="close" data-dismiss="modal" @click="limpiar()" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div>
                            </div>



                        </div>

                    </div>


                    <form  method="post" enctype="multipart/form-data" class="form-horizontal">


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Número de Control Actividad</label>
                        <div class="col-md-9">
                            <input type="number"  v-model="Tarea.id" class="form-control"  readonly="readonly">

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Nombre de Actividad</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Tarea.nombre" class="form-control" placeholder="Ingrese el Nombre de la Actividad" required readonly="readonly">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Descripción</label>
                        <div class="col-md-9">
                            <input type="text"  v-model="Tarea.descripcion" class="form-control" placeholder="Ingrese la descripcion" required readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Valor</label>
                        <div class="col-md-9">
                            <input type="number" v-model="Tarea.valor" class="form-control" placeholder="Ingrese el Valor" required readonly="readonly">

                        </div>
                    </div>


                    <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                    <button type="button" class="btn btn-danger" @click="eliminaract" ><i class="fa fa-trash fa-2x"></i> Eliminar</button>
                </div>
                </form>
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
            this.getclases();
            this.getCursos();
            console.log(this.Clases);
        },

    data()
    {
        return{
            editmode: false,
             Clases: [],
             Tareas: [],
             Materias: [],
             Profesores: [],
             Estudiantes: [],
             Alumnos: [],
             Tarea : {id: '',nombre: '', descripcion: '', id_clase: '',valor: ''},
             Clase: {id: '',id_Materia: '',id_profesor: ''},
             alu: {id: ''},
             Cursos: [],
             id : 0,

        }
    },

    methods:{

              limparacti()
              {
                      this.Tarea.descripcion = "";
                      this.Tarea.valor = "";
                      this.Tarea.nombre = "";
                    },
                  rapido()
                  {


                  const params = {
                   id_clas: this.Clase.id,

                   }
                    this.Clase.id = clas.id;
                   console.log(params);
                   console.log(this.Alumnos);
                  var urladmis = "traertareas";
               axios.post(urladmis,params).then(response =>
               {
                 this.Tareas = response.data
               });
                  },


                eliminaract()
                {

                const params = {
                  id : this.Tarea.id

                  }
                  var urlEstud = "EliinarActividad";
                  axios.post(urlEstud,params);

                  this.rapido;
                $('#eliminartareamodal').modal('hide');

                },
                eliminartarea(tarea)
                {
                this.Tarea.descripcion = tarea.descripcion;
                this.Tarea.valor = tarea.Valor;
                this.Tarea.nombre = tarea.Nombre;
                this.Tarea.id = tarea.id;
                $('#eliminartareamodal').modal('show');
                },
                Veractividad(tarea)
                {

                this.Tarea.descripcion = tarea.descripcion;
                this.Tarea.valor = tarea.Valor;
                this.Tarea.nombre = tarea.Nombre;
                this.Tarea.id = tarea.id;
                $('#vertareamodal').modal('show');

                },
                cargado()
                {

                },
              EditarActividad()
              {
              const params = {
                id : this.Tarea.id,
                nombre : this.Tarea.nombre,
                descripcion: this.Tarea.descripcion,
                valor : this.Tarea.valor
                }
                var urlEstud = "EditarActividad";
                axios.post(urlEstud,params);
                this.limparacti();
                this.cargado();
                $('#editartareaamodal').modal('hide');


              },
              editartarea(tarea)
              {
                this.Tarea.descripcion = tarea.descripcion;
                this.Tarea.valor = tarea.Valor;
                this.Tarea.nombre = tarea.Nombre;
                this.Tarea.id = tarea.id;
                $('#editartareaamodal').modal('show');

              },
              AgregarActividad()
              {
              const params = {
                nombre : this.Tarea.nombre,
                descripcion: this.Tarea.descripcion,
                valor : this.Tarea.valor,
               id_clase: this.Clase.id,

               }
              var urlEstud = "AgregarActividad";
              axios.post(urlEstud,params);
              this.limparacti();
              this.cargado();
              $('#agregartareamodal').modal('hide');

              },

              abrirnuevatarea()
              {

              $('#agregartareamodal').modal('show');

              },
              getCursos()
              {
              var urlEstud = "getCursos";
              axios.get(urlEstud).then(response =>
              {
                this.Cursos = response.data
              });

              },
              getEstud(){
              var urlEstud = "Estudiante";
              axios.get(urlEstud).then(response =>
              {
                this.Estudiantes = response.data
              });
              },
            getclases()
            {
            var urlEstud = "Clases";
            axios.get(urlEstud).then(response =>
            {
              this.Clases = response.data
            });
            },
            abrirnuevo()
            {
                this.getmateiras();
                this.getprofesores();
                this.getEstud();
                $('#agregarmodal').modal('show');
            },
            getmateiras()
            {
            var urlEstud = "Materias";
            axios.get(urlEstud).then(response =>
            {
              this.Materias = response.data
            });
            },
            getprofesores(){
            var urladmis = "Profesor";
            axios.get(urladmis).then(response =>
            {
              this.Profesores = response.data
            });
            },
            entre(id)
            {
            if( $("#"+id).prop('checked') == true ) {
            $("#"+id).prop('checked', true);

                      this.Alumnos.push(id);
                  }
                  else{
                  $("#"+id).prop('checked', false);
                    var index = this.Alumnos.indexOf(id);
                    if (index > -1) {
                       this.Alumnos.splice(index, 1);
}

                  }

                  console.log(this.Alumnos);
            },
            limpiar()
            {
                  this.Clase.id_Materia = '';
                  this.Clase.id_profesor = '';
                  for( var i = 0; i<this.Alumnos.length; i++)
                  {
                  $("#"+this.Alumnos[i]).prop('checked', false);
                  $('#editarmodal').modal('hide');
                  $('#vermodal').modal('hide');




                  }
            },
            cerrareditar()
            {
            this.limpiar();
            $('#editarmodal').modal('hide');
            },
            cerraragregar()
            {
              this.limpiar();
              $('#agregarmodal').modal('hide');


            },
            cerrarver()
            {
            this.limpiar();
            $('#vermodal').modal('hide');
            },
            cerrareliminar()
            {
            this.limpiar();
            $('#eliminarmodal').modal('hide');
            },
            capturar()
            {
                      if(this.Clase.id_Materia == ''|| this.Clase.id_profesor == '')
                      {
                      alert('Debes completar los campos requeridos para poder guardar');
                      return;
                      }
                      else
                      {
                      const params = {
                       id_Materia: this.Clase.id_Materia ,
                       id_profesor: this.Clase.id_profesor,
                        Alumnos: this.Alumnos,
                       }
                       console.log(params);
                       console.log(this.Alumnos);
                      var urladmis = "Clases.save";
                        axios.post(urladmis,params).then(response =>
                        {
                          this.id = response.data;
                        });
                        console.log(this.id);
                        for( var i = 0; i<this.Alumnos.length; i++)
                        {

                        const params = {
                         id_alumno: this.Alumnos[i],
                         }
                         var urladmis = "Clases.alumnos";
                      axios.post(urladmis,params);

                        }

                      this.getclases();
                      $('#agregarmodal').modal('hide');
                              this.limpiar();
                              this.Alumnos.length = 0;

                        }


            },
            cargardatos(cas)
            {
            this.Clase.id = cas.id;

            this.getprofesores();
            this.getEstud();
            this.getmateiras()
            this.Clase.id_Materia = cas.id_Materia;
            this.Clase.id_profesor = cas.id_Profesor;
            this.getCursos;

            this.Cursos.forEach(function(element)
            {
            if(cas.id == element.id_Clase)
            {
            console.log('hola');

            $("#"+element.id_Estudiante).prop('checked', true);

            }
                  }
            );


            },
            editarabrir(clas)
            {


            const params = {
             id_clas: clas.id,

             }
              this.Clase.id = clas.id;
             console.log(params);
             console.log(this.Alumnos);
            var urladmis = "traertareas";
         axios.post(urladmis,params).then(response =>
         {
           this.Tareas = response.data
         });


              $('#editarmodal').modal('show');

            },
            verabrir(clas)
            {




            $('#vermodal').modal('show');
            },
            eliminarabrir(clas)
            {
            this.cargardatos(clas);
            this.getCursos(clas.id);
            console.log(this.Cursos);
            $('#eliminarmodal').modal('show');
            },
            eliminar()
            {

            $('#eliminarmodal').modal('hide');

            }


           },


           }









</script>
