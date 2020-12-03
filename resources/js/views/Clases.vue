<template>
<div class="container-fluid">

    <div class="card">
        <div class="card-header">

           <h2>Listado de Clases</h2><br/>

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

                <tr v-for ="clas in Clases" :key="clas.id">
                    <td>{{clas.id}}</td>
                    <td>{{clas.Materia}}</td>
                    <td>
                        <button type="button" class="btn btn-success"  data-toggle="modal" @click.prevent="verabrir(clas)">

                          <i class="fa fa-eye fa-2x"></i> Ver
                        </button> &nbsp;


                    <td>
                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" @click.prevent="editarabrir(clas)">

                          <i class="fa fa-edit fa-2x"></i> Editar
                        </button> &nbsp;
                    </td>

                    <td>


                        <button type="button" class="btn btn-danger btn-sm" @click.prevent="eliminarabrir(clas)">
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
                    <h4 class="modal-title">Agregar Clase</h4>
                    <button type="button" data-dismiss="modal" class="close" @click="limpiar()" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div></div>

                        </div>

                    </div>


                    <form  method="post" enctype="multipart/form-data" class="form-horizontal"  >


                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Materia</label>
                        <div class="col-md-9">
                          <select v-model="Clase.id_Materia"  class="form-control" required >
                            <option value="" selected>Elija una opción...</option>
                             <option  v-for ="Mat in Materias" :key="Mat.id"v-bind:value="Mat.id">{{Mat.Materia}}</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Profesor que la imparte</label>
                        <div class="col-md-9">
                          <select  class="form-control"  v-model="Clase.id_profesor" required >
                            <option value="" selected>Elija una opción...</option>
                             <option  v-for ="Profesor in Profesores" :key="Profesor.id" v-bind:value="Profesor.id" >{{Profesor.Nombre + " "+ Profesor.Apellido_P + " "+Profesor.Apellido_M}}</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Agregar Alumnos</label>
                        <div class="col-md-9">
                        <table class="table" id="example">
                                  <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"></th>
                                      <th scope="col">#</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">CURP</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr v-for= "alu  in Estudiantes" :key="alu.id">
                                    <th><div class="form-check">
                                    <input class="form-check-input" v-bind:id="alu.id" type="checkbox" v-on:click='entre(alu.id)'>

                                  </div></th>
                                      <th scope="row">{{ alu.id}}</th>
                                      <td>{{alu.Nombre}}</td>
                                      <td>{{alu.CURP}}</td>

                                    </tr>

                                  </tbody>
                                </table>
                        </div>
                    </div>





                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"  @click="cerraragregar" ><i class="fa fa-times fa-2x"></i> Cerrar</button>
                    <button type="button" class="btn btn-success" @click="capturar" ><i class="fa fa-save fa-2x"></i> Guardar</button>

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
                    <h4 class="modal-title">Editar Clase</h4>
                    <button type="button" class="close" data-dismiss="modal" @click="limpiar()" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div></div>

                        </div>

                    </div>


                    <form  method="post" enctype="multipart/form-data" class="form-horizontal"  >

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Número de Control</label>
                        <div class="col-md-9">
                        <input type="email" v-model="Clase.id" class="form-control" placeholder="Ingrese un correo electronico" readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Materia</label>
                        <div class="col-md-9">
                          <select v-model="Clase.id_Materia"  class="form-control" required >
                            <option value="" selected>Elija una opción...</option>
                             <option  v-for ="Mat in Materias" :key="Mat.id"v-bind:value="Mat.id">{{Mat.Materia}}</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Profesor que la imparte</label>
                        <div class="col-md-9">
                          <select  class="form-control"  v-model="Clase.id_profesor" required >
                            <option value="" selected>Elija una opción...</option>
                             <option  v-for ="Profesor in Profesores" :key="Profesor.id" v-bind:value="Profesor.id" >{{Profesor.Nombre + " "+ Profesor.Apellido_P + " "+Profesor.Apellido_M}}</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Agregar Alumnos</label>
                        <div class="col-md-9">
                        <table class="table" id="example">
                                  <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"></th>
                                      <th scope="col">#</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">CURP</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr v-for= "alu  in Estudiantes" :key="alu.id">
                                    <th><div class="form-check">
                                    <input class="form-check-input" v-bind:id="alu.id"  type="checkbox" v-on:click='entre(alu.id)'>

                                  </div></th>
                                      <th scope="row">{{ alu.id}}</th>
                                      <td>{{alu.Nombre}}</td>
                                      <td>{{alu.CURP}}</td>

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

    <div class="modal fade" id="vermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title">Editar Clase</h4>
                    <button type="button" class="close" data-dismiss="modal" @click="limpiar()" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div></div>

                        </div>

                    </div>


                    <form  method="post" enctype="multipart/form-data" class="form-horizontal"  >

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Número de Control</label>
                        <div class="col-md-9">
                        <input type="email" v-model="Clase.id" class="form-control" placeholder="Ingrese un correo electronico" readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Materia</label>
                        <div class="col-md-9">
                          <select v-model="Clase.id_Materia"  class="form-control" required disabled readonly="readonly">
                            <option value="" selected>Elija una opción...</option>
                             <option  v-for ="Mat in Materias" :key="Mat.id"v-bind:value="Mat.id">{{Mat.Materia}}</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Profesor que la imparte</label>
                        <div class="col-md-9">
                          <select  class="form-control"  v-model="Clase.id_profesor" required readonly="readonly" disabled>
                            <option value="" selected>Elija una opción...</option>
                             <option  v-for ="Profesor in Profesores" :key="Profesor.id" v-bind:value="Profesor.id" >{{Profesor.Nombre + " "+ Profesor.Apellido_P + " "+Profesor.Apellido_M}}</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Agregar Alumnos</label >
                        <div class="col-md-9">
                        <table class="table" id="example">
                                  <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"></th>
                                      <th scope="col">#</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">CURP</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr v-for= "alu  in Estudiantes" :key="alu.id" readonly="readonly">
                                    <th><div class="form-check">
                                    <input class="form-check-input" v-bind:id="alu.id"  type="checkbox" v-on:click='entre(alu.id)' readonly="readonly" disabled>

                                  </div></th>
                                      <th scope="row">{{ alu.id}}</th>
                                      <td>{{alu.Nombre}}</td>
                                      <td>{{alu.CURP}}</td>

                                    </tr>

                                  </tbody>
                                </table>
                        </div>
                    </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"  @click="cerrarver" ><i class="fa fa-times fa-2x"></i> Cerrar</button>
                    <button type="button" class="btn btn-success" @click="capturar" ><i class="fa fa-save fa-2x"></i> Guardar</button>
                </div>
                </form>
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
                    <h4 class="modal-title">Editar Clase</h4>
                    <button type="button" class="close" data-dismiss="modal" @click="limpiar()" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row div-error">

                        <div class="text-center text-error">

                            <div></div>

                        </div>

                    </div>


                    <form  method="post" enctype="multipart/form-data" class="form-horizontal"  >

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Número de Control</label>
                        <div class="col-md-9">
                        <input type="email" v-model="Clase.id" class="form-control" placeholder="Ingrese un correo electronico" readonly="readonly">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Materia</label>
                        <div class="col-md-9">
                          <select v-model="Clase.id_Materia"  class="form-control" required disabled>
                            <option value="" selected>Elija una opción...</option>
                             <option  v-for ="Mat in Materias" :key="Mat.id"v-bind:value="Mat.id">{{Mat.Materia}}</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Profesor que la imparte</label>
                        <div class="col-md-9">
                          <select  class="form-control"  v-model="Clase.id_profesor" required readonly="readonly" disabled>
                            <option value="" selected>Elija una opción...</option>
                             <option  v-for ="Profesor in Profesores" :key="Profesor.id" v-bind:value="Profesor.id" >{{Profesor.Nombre + " "+ Profesor.Apellido_P + " "+Profesor.Apellido_M}}</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="email-input">Agregar Alumnos</label >
                        <div class="col-md-9">
                        <table class="table" id="example">
                                  <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"></th>
                                      <th scope="col">#</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">CURP</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr v-for= "alu  in Estudiantes" :key="alu.id" readonly="readonly">
                                    <th><div class="form-check">
                                    <input class="form-check-input" v-bind:id="alu.id"  type="checkbox" v-on:click='entre(alu.id)' disabled readonly="readonly">

                                  </div></th>
                                      <th scope="row">{{ alu.id}}</th>
                                      <td>{{alu.Nombre}}</td>
                                      <td>{{alu.CURP}}</td>

                                    </tr>

                                  </tbody>
                                </table>
                        </div>
                    </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-success"  @click="cerrareliminar" ><i class="fa fa-times fa-2x"></i> Cerrar</button>
                    <button type="button"  class="btn btn-danger"  @click="eliminar" ><i class="fa fa-trash fa-2x"></i> Eliminar</button>
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
             Materias: [],
             Profesores: [],
             Estudiantes: [],
             Alumnos: [],
             Clase: {id: '',id_Materia: '',id_profesor: ''},
             alu: {id: ''},
             Cursos: [],
             id : 0,

        }
    },

    methods:{

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

              this.cargardatos(clas);
              this.getCursos(clas.id);
              console.log(this.Cursos);



              $('#editarmodal').modal('show');

            },
            verabrir(clas)
            {
            this.cargardatos(clas);
            this.getCursos(clas.id);
            console.log(this.Cursos);



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
