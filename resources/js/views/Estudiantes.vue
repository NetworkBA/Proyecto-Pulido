<template>
<div class="container-fluid">

    <div class="card">
        <div class="card-header">

           <h2>Listado de Estudiantes</h2><br/>

            <button class="btn btn-primary btn-lg" type="button" data-toggle="modal"  @click.prevent="abrirnuevo">
                <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Estudiante
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

                <tr v-for ="Estu in Estud" :key="Estu.id">
                    <td>{{Estu.id}}</td>
                    <td>{{Estu.Nombre +" "+ Estu.Apellido_P + " "+ Estu.Apellido_M}}</td>
                    <td>{{Estu.CURP}}</td>
                    <td>
                        <button type="button" class="btn btn-success"  data-toggle="modal" @click.prevent="vermodal(Estu)">

                          <i class="fa fa-eye fa-2x"></i> Ver
                        </button> &nbsp;


                    <td>
                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" @click.prevent="editarmodal(Estu)">

                          <i class="fa fa-edit fa-2x"></i> Editar
                        </button> &nbsp;
                    </td>

                    <td>


                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" @click.prevent="eliminarmodal(Estu)">
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



  <div class="modal fade" id="abrirmodal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-primary modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Agregar Estudiante</h4>
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


                  <form  method="post" enctype="multipart/form-data" class="form-horizontal"  v-on:submit.prevent=""  action="#">
                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                          <div class="col-md-9">
                              <input type="text"  v-model="Estudiante.Nombre" class="form-control" placeholder="Ingrese el Nombre" required>

                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Apellido_P" class="form-control" placeholder="Ingrese Apellido Paterno" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Apellido_M" class="form-control" placeholder="Ingrese Apellido Materno" >
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.CURP" class="form-control" placeholder="Ingrese CURP" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Fecha Nacimiento</label>
                          <div class="col-md-9">
                          <input type="date" v-model="Estudiante.Fecha_Nacimiento" id="start" name="trip-start"
                                 value="2020-07-22"
                                 min="1900-01-01" max="2020-12-31" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo Vialidad</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.Tipo_Vialidad" id="Tipo_Vialidad" class="form-control" @click="ObtenerTipoViaidad" required>
                            <option value="" selected>Elija una opción...</option>
                               <option  v-for ="Tipo_vi in Tipo_via" :key="Tipo_vi.id" v-bind:value="Tipo_vi.id">{{Tipo_vi.Tipo_Vialidad}}</option>
                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tramo</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Tramo" class="form-control" placeholder="Ingrese el Tramo" required>

                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Administracion de Vialidad</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_administracion_vialidad"  class="form-control" @click="ObtenerTipoAdViaidad" required>
                            <option value="" selected>Elija una opción...</option>
                               <option  v-for ="Tipo_via in Tipo_admi_via" :key="Tipo_via.id" v-bind:value="Tipo_via.id">{{Tipo_via.Tipo_Admi_Vialidad}}</option>
                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Transito</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_Transito"  class="form-control" @click="ObtenerTransito" required>
                              <option  value = "" selected>Elija una opción...</option>
                               <option  v-for ="tran in Transito" :key="tran.id" v-bind:value="tran.id">{{tran.Transito}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Margen</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_margen"  class="form-control" @click="ObtenerMargen" required>
                              <option  value = "" selected>Elija una opción...</option>
                               <option  v-for ="Mar in Margen" :key="Mar.id" v-bind:value="Mar.id">{{Mar.Margen}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre de Vialidad</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Nombre_vialidad" class="form-control" placeholder="Ingrese el Nombre de Vialidad" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Kilometro</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Kilometro" class="form-control" placeholder="Ingrese el Número de Kilometro">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Exterior</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Numero_exterior" class="form-control" placeholder="Ingrese el Número Exterior" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Exterior Alfa Numerico</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Numero_exterior_alfa" class="form-control" placeholder="Ingrese el Número Exterior Alfa Numerico">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Interior</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Numero_interior" class="form-control" placeholder="Ingrese el Número Exterior">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Interior Alfa Numerico</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Numero_interior_alfa" class="form-control" placeholder="Ingrese el Número Exterior Alfa Numerico">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Código Postal</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Codigo_postal" class="form-control" placeholder="Ingrese el Código Postal" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo Asentamiento</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_tipo_asentamiento"  class="form-control" @click="ObtenerTipoAs" required>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="tipoas in TiposAsentamientos" :key="tipoas.id"v-bind:value="tipoas.id">{{tipoas.Tipo_Asentamiento}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Nombre_asentamiento" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 1</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_1"  class="form-control" @click="ObtenerReferencias" required>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_1" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 2</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_2"  class="form-control" @click="ObtenerReferencias" required>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_2" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 3</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_3"  class="form-control" @click="ObtenerReferencias">
                              <option value="" >Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_3" class="form-control" placeholder="Ingrese el Nombre del Asentamiento">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Pradre de Familia</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_padrefamilia"  class="form-control" @click="ObtenerPadrefamilia" required>
                              <option value="" >Elija una opción...</option>
                               <option  v-for ="admi in PradredeFamilis" :key="admi.id" v-bind:value="admi.id">{{admi.Nombre +" "+ admi.Apellido_P + " "+ admi.Apellido_M}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                          <button  type="submit" class="btn btn-success" @click="guardarEstud" ><i class="fa fa-save fa-2x"></i> Guardar</button>

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
                  <h4 class="modal-title">Ver Estudiante</h4>
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


                  <form  method="post" enctype="multipart/form-data" class="form-horizontal"  v-on:submit.prevent=""  action="#">

                  <div class="form-group row">
                      <label class="col-md-3 form-control-label" for="text-input">Num Control</label>
                      <div class="col-md-9">
                          <input type="text"  v-model="Estudiante.id" class="form-control" required readonly="readonly">
                      </div>

                    </div>
                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                          <div class="col-md-9">
                              <input type="text"  v-model="Estudiante.Nombre" class="form-control" placeholder="Ingrese el Nombre" required readonly="readonly">

                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Apellido_P" class="form-control" placeholder="Ingrese Apellido Paterno" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Apellido_M" class="form-control" placeholder="Ingrese Apellido Materno" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.CURP" class="form-control" placeholder="Ingrese CURP" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Fecha Nacimiento</label>
                          <div class="col-md-9">
                          <input type="date" v-model="Estudiante.Fecha_Nacimiento" id="start" name="trip-start"
                                 value="2020-07-22"
                                 min="1900-01-01" max="2020-12-31" required disabled>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo Vialidad</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.Tipo_Vialidad" id="Tipo_Vialidad" class="form-control" @click="ObtenerTipoViaidad" required disabled>
                            <option value="" selected>Elija una opción...</option>
                               <option  v-for ="Tipo_vi in Tipo_via" :key="Tipo_vi.id" v-bind:value="Tipo_vi.id">{{Tipo_vi.Tipo_Vialidad}}</option>
                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tramo</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Tramo" class="form-control" placeholder="Ingrese el Tramo" required readonly="readonly">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Administracion de Vialidad</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_administracion_vialidad"  class="form-control" @click="ObtenerTipoAdViaidad" required disabled>
                            <option value="" selected>Elija una opción...</option>
                               <option  v-for ="Tipo_via in Tipo_admi_via" :key="Tipo_via.id" v-bind:value="Tipo_via.id">{{Tipo_via.Tipo_Admi_Vialidad}}</option>
                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Transito</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_Transito"  class="form-control" @click="ObtenerTransito" required disabled>
                              <option  value = "" selected>Elija una opción...</option>
                               <option  v-for ="tran in Transito" :key="tran.id" v-bind:value="tran.id">{{tran.Transito}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Margen</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_margen"  class="form-control" @click="ObtenerMargen" required disabled>
                              <option  value = "" selected>Elija una opción...</option>
                               <option  v-for ="Mar in Margen" :key="Mar.id" v-bind:value="Mar.id">{{Mar.Margen}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre de Vialidad</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Nombre_vialidad" class="form-control" placeholder="Ingrese el Nombre de Vialidad" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Kilometro</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Kilometro" class="form-control" placeholder="Ingrese el Número de Kilometro" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Exterior</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Numero_exterior" class="form-control" placeholder="Ingrese el Número Exterior" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Exterior Alfa Numerico</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Numero_exterior_alfa" class="form-control" placeholder="Ingrese el Número Exterior Alfa Numerico" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Interior</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Numero_interior" class="form-control" placeholder="Ingrese el Número Exterior" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Interior Alfa Numerico</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Numero_interior_alfa" class="form-control" placeholder="Ingrese el Número Exterior Alfa Numerico" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Código Postal</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Codigo_postal" class="form-control" placeholder="Ingrese el Código Postal" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo Asentamiento</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_tipo_asentamiento"  class="form-control" @click="ObtenerTipoAs" required disabled>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="tipoas in TiposAsentamientos" :key="tipoas.id"v-bind:value="tipoas.id">{{tipoas.Tipo_Asentamiento}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Nombre_asentamiento" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 1</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_1"  class="form-control" @click="ObtenerReferencias" required disabled>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_1" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required  readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 2</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_2"  class="form-control" @click="ObtenerReferencias" required disabled>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_2" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required  readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 3</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_3"  class="form-control" @click="ObtenerReferencias" disabled>
                              <option value="" >Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_3" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Pradre de Familia</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_padrefamilia"  class="form-control" @click="ObtenerPadrefamilia" required disabled>
                              <option value="" >Elija una opción...</option>
                               <option  v-for ="admi in PradredeFamilis" :key="admi.id" v-bind:value="admi.id">{{admi.Nombre +" "+ admi.Apellido_P + " "+ admi.Apellido_M}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"  @click="limpia"><i class="fa fa-times fa-2x"></i> Cerrar</button>

                      </div>



                  </form>
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
                  <h4 class="modal-title">Modificar Estudiante</h4>
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


                  <form  method="post" enctype="multipart/form-data" class="form-horizontal"  v-on:submit.prevent=""  action="#">
                  <div class="form-group row">
                      <label class="col-md-3 form-control-label" for="text-input">Num Control</label>
                      <div class="col-md-9">
                          <input type="text"  v-model="Estudiante.id" class="form-control" required readonly="readonly">

                      </div>
                  </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                          <div class="col-md-9">
                              <input type="text"  v-model="Estudiante.Nombre" class="form-control" placeholder="Ingrese el Nombre" required>

                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Apellido_P" class="form-control" placeholder="Ingrese Apellido Paterno" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Apellido_M" class="form-control" placeholder="Ingrese Apellido Materno" >
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.CURP" class="form-control" placeholder="Ingrese CURP" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Fecha Nacimiento</label>
                          <div class="col-md-9">
                          <input type="date" v-model="Estudiante.Fecha_Nacimiento" id="start" name="trip-start"
                                 value="2020-07-22"
                                 min="1900-01-01" max="2020-12-31" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo Vialidad</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.Tipo_Vialidad" id="Tipo_Vialidad" class="form-control" @click="ObtenerTipoViaidad" required>
                            <option value="" selected>Elija una opción...</option>
                               <option  v-for ="Tipo_vi in Tipo_via" :key="Tipo_vi.id" v-bind:value="Tipo_vi.id">{{Tipo_vi.Tipo_Vialidad}}</option>
                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tramo</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Tramo" class="form-control" placeholder="Ingrese el Tramo" required>

                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Administracion de Vialidad</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_administracion_vialidad"  class="form-control" @click="ObtenerTipoAdViaidad" required>
                            <option value="" selected>Elija una opción...</option>
                               <option  v-for ="Tipo_via in Tipo_admi_via" :key="Tipo_via.id" v-bind:value="Tipo_via.id">{{Tipo_via.Tipo_Admi_Vialidad}}</option>
                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Transito</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_Transito"  class="form-control" @click="ObtenerTransito" required>
                              <option  value = "" selected>Elija una opción...</option>
                               <option  v-for ="tran in Transito" :key="tran.id" v-bind:value="tran.id">{{tran.Transito}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Margen</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_margen"  class="form-control" @click="ObtenerMargen" required>
                              <option  value = "" selected>Elija una opción...</option>
                               <option  v-for ="Mar in Margen" :key="Mar.id" v-bind:value="Mar.id">{{Mar.Margen}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre de Vialidad</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Nombre_vialidad" class="form-control" placeholder="Ingrese el Nombre de Vialidad" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Kilometro</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Kilometro" class="form-control" placeholder="Ingrese el Número de Kilometro">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Exterior</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Numero_exterior" class="form-control" placeholder="Ingrese el Número Exterior" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Exterior Alfa Numerico</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Numero_exterior_alfa" class="form-control" placeholder="Ingrese el Número Exterior Alfa Numerico">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Interior</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Numero_interior" class="form-control" placeholder="Ingrese el Número Exterior">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Interior Alfa Numerico</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Numero_interior_alfa" class="form-control" placeholder="Ingrese el Número Exterior Alfa Numerico">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Código Postal</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Codigo_postal" class="form-control" placeholder="Ingrese el Código Postal" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo Asentamiento</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_tipo_asentamiento"  class="form-control" @click="ObtenerTipoAs" required>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="tipoas in TiposAsentamientos" :key="tipoas.id"v-bind:value="tipoas.id">{{tipoas.Tipo_Asentamiento}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Nombre_asentamiento" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 1</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_1"  class="form-control" @click="ObtenerReferencias" required>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_1" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 2</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_2"  class="form-control" @click="ObtenerReferencias" required>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_2" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 3</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_3"  class="form-control" @click="ObtenerReferencias">
                              <option value="" >Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_3" class="form-control" placeholder="Ingrese el Nombre del Asentamiento">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Pradre de Familia</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_padrefamilia"  class="form-control" @click="ObtenerPadrefamilia" required>
                              <option value="" >Elija una opción...</option>
                               <option  v-for ="admi in PradredeFamilis" :key="admi.id" v-bind:value="admi.id">{{admi.Nombre +" "+ admi.Apellido_P + " "+ admi.Apellido_M}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal"  @click="limpia"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                          <button  type="submit" class="btn btn-success" @click="capturardat" ><i class="fa fa-save fa-2x"></i> Guardar</button>

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
                  <h4 class="modal-title">Eliminar Estudiante</h4>
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


                  <form  method="post" enctype="multipart/form-data" class="form-horizontal"  v-on:submit.prevent=""  action="#">

                  <div class="form-group row">
                      <label class="col-md-3 form-control-label" for="text-input">Num Control</label>
                      <div class="col-md-9">
                          <input type="text"  v-model="Estudiante.id" class="form-control" required readonly="readonly">
                      </div>

                    </div>
                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                          <div class="col-md-9">
                              <input type="text"  v-model="Estudiante.Nombre" class="form-control" placeholder="Ingrese el Nombre" required readonly="readonly">

                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Apellido Paterno</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Apellido_P" class="form-control" placeholder="Ingrese Apellido Paterno" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Apellido Materno</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Apellido_M" class="form-control" placeholder="Ingrese Apellido Materno" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">CURP</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.CURP" class="form-control" placeholder="Ingrese CURP" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Fecha Nacimiento</label>
                          <div class="col-md-9">
                          <input type="date" v-model="Estudiante.Fecha_Nacimiento" id="start" name="trip-start"
                                 value="2020-07-22"
                                 min="1900-01-01" max="2020-12-31" required disabled>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo Vialidad</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.Tipo_Vialidad" id="Tipo_Vialidad" class="form-control" @click="ObtenerTipoViaidad" required disabled>
                            <option value="" selected>Elija una opción...</option>
                               <option  v-for ="Tipo_vi in Tipo_via" :key="Tipo_vi.id" v-bind:value="Tipo_vi.id">{{Tipo_vi.Tipo_Vialidad}}</option>
                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tramo</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Tramo" class="form-control" placeholder="Ingrese el Tramo" required readonly="readonly">

                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Administracion de Vialidad</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_administracion_vialidad"  class="form-control" @click="ObtenerTipoAdViaidad" required disabled>
                            <option value="" selected>Elija una opción...</option>
                               <option  v-for ="Tipo_via in Tipo_admi_via" :key="Tipo_via.id" v-bind:value="Tipo_via.id">{{Tipo_via.Tipo_Admi_Vialidad}}</option>
                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Transito</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_Transito"  class="form-control" @click="ObtenerTransito" required disabled>
                              <option  value = "" selected>Elija una opción...</option>
                               <option  v-for ="tran in Transito" :key="tran.id" v-bind:value="tran.id">{{tran.Transito}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Margen</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_margen"  class="form-control" @click="ObtenerMargen" required disabled>
                              <option  value = "" selected>Elija una opción...</option>
                               <option  v-for ="Mar in Margen" :key="Mar.id" v-bind:value="Mar.id">{{Mar.Margen}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre de Vialidad</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Nombre_vialidad" class="form-control" placeholder="Ingrese el Nombre de Vialidad" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Kilometro</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Kilometro" class="form-control" placeholder="Ingrese el Número de Kilometro" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Exterior</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Numero_exterior" class="form-control" placeholder="Ingrese el Número Exterior" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Exterior Alfa Numerico</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Numero_exterior_alfa" class="form-control" placeholder="Ingrese el Número Exterior Alfa Numerico" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Interior</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Numero_interior" class="form-control" placeholder="Ingrese el Número Exterior" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Numero Interior Alfa Numerico</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Numero_interior_alfa" class="form-control" placeholder="Ingrese el Número Exterior Alfa Numerico" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Código Postal</label>
                          <div class="col-md-9">
                          <input type="Number" v-model="Estudiante.Codigo_postal" class="form-control" placeholder="Ingrese el Código Postal" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo Asentamiento</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_tipo_asentamiento"  class="form-control" @click="ObtenerTipoAs" required disabled>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="tipoas in TiposAsentamientos" :key="tipoas.id"v-bind:value="tipoas.id">{{tipoas.Tipo_Asentamiento}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Nombre_asentamiento" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 1</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_1"  class="form-control" @click="ObtenerReferencias" required disabled>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_1" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required  readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 2</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_2"  class="form-control" @click="ObtenerReferencias" required disabled>
                              <option value="" selected>Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_2" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" required  readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Tipo de Referencia 3</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_referencia_3"  class="form-control" @click="ObtenerReferencias" disabled>
                              <option value="" >Elija una opción...</option>
                               <option  v-for ="ref in Referencias" :key="ref.id" v-bind:value="ref.id">{{ref.Tipo_refenrencia}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Nombre del Asentamiento</label>
                          <div class="col-md-9">
                          <input type="text" v-model="Estudiante.Referencia_3" class="form-control" placeholder="Ingrese el Nombre del Asentamiento" readonly="readonly">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-3 form-control-label" for="email-input">Pradre de Familia</label>
                          <div class="col-md-9">
                            <select v-model="Estudiante.id_padrefamilia"  class="form-control" @click="ObtenerPadrefamilia" required disabled>
                              <option value="" >Elija una opción...</option>
                               <option  v-for ="admi in PradredeFamilis" :key="admi.id" v-bind:value="admi.id">{{admi.Nombre +" "+ admi.Apellido_P + " "+ admi.Apellido_M}}</option>

                             </select>
                          </div>
                      </div>

                      <div class="modal-footer">
                      <button type="button" class="btn btn-success" @click="limpia"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                      <button type="button" class="btn btn-danger" @click="eliminar" ><i class="fa fa-trash fa-2x"></i> Eliminar</button>

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
            console.log('Component ad1.')
            this.getEstud()
        },

    data()
    {
        return{
          editmode: false,
           Estud: [],
           Estudiante:
           {    id: '',
                Nombre: '',
                Apellido_P: '',
                Apellido_M: '',
                CURP: '',
                Fecha_Nacimiento: '',
                Tipo_Vialidad: '',
                Tramo: '',
                id_administracion_vialidad: '',
                id_Transito: '',
                id_margen: '',
                Nombre_vialidad: '',
                Kilometro: '',
                Numero_exterior: '',
                Numero_exterior_alfa: '',
                Numero_interior_alfa: '',
                Numero_interior: '',
                Codigo_postal: '',
                id_tipo_asentamiento: '',
                Nombre_asentamiento: '',
                id_referencia_1: '',
                Referencia_1: '',
                id_referencia_2: '',
                Referencia_2: '',
                id_referencia_3: '',
                Referencia_3: '',
                id_padrefamilia: '',
              },

              Tipo_via : [],
              Tipo_admi_via: [],
              Margen: [],
              TiposAsentamientos: [],
              Referencias: [],
              PradredeFamilis: [],
              Transito: [],

        }
    },

    methods:{


            guardarEstud()
            {

              console.log (this.Estudiante.id_Transito);

              if(this.Estudiante.Nombre == '' || this.Estudiante.Apellido_P == ''  || this.Estudiante.id_padrefamilia == '' || this.Estudiante.CURP == '' || this.Estudiante.Tipo_Vialidad == ''
              || this.Estudiante.Fecha_Nacimiento == '' || this.Estudiante.Tramo == '' || this.Estudiante.id_administracion_vialidad == '' || this.Estudiante.id_Transito == '' || this.Estudiante.id_margen == ''
              || this.Estudiante.Nombre_vialidad == '' || this.Estudiante.Numero_exterior == '' || this.Estudiante.Codigo_postal== '' || this.Estudiante.id_tipo_asentamiento == '' || this.Estudiante.id_referencia_1 == ''
              || this.Estudiante.Nombre_asentamiento == '' || this.Estudiante.Referencia_1 == '' || this.Estudiante.id_referencia_2 == '' || this.Estudiante.Referencia_2  == '')
              {
                  alert('Debes completar los campos requeridos para poder guardar');
                  return;
              }
              else
              {

              const params = {
               Nombre: this.Estudiante.Nombre ,
               Apellido_P: this.Estudiante.Apellido_P,
               Apellido_M: this.Estudiante.Apellido_M,
               CURP: this.Estudiante.CURP,
               Fecha_Nacimiento: this.Estudiante.Fecha_Nacimiento,
               id_tipo_vialidad: this.Estudiante.Tipo_Vialidad,
               Tramo: this.Estudiante.Tramo,
               id_administracion_vialidad: this.Estudiante.id_administracion_vialidad,
               id_Transito: this.Estudiante.id_Transito,
               id_margen: this.Estudiante.id_margen,
               Nombre_vialidad: this.Estudiante.Nombre_vialidad,
               Kilometro: this.Estudiante.Kilometro,
               Numero_exterior: this.Estudiante.Numero_exterior,
               Numero_exterior_alfa: this.Estudiante.Numero_exterior_alfa,
               Numero_interior_alfa: this.Estudiante.Numero_interior_alfa,
               Numero_interior: this.Estudiante.Numero_interior,
               Codigo_postal: this.Estudiante.Codigo_postal,
               id_tipo_asentamiento: this.Estudiante.id_tipo_asentamiento,
               Nombre_asentamiento: this.Estudiante.Nombre_asentamiento,
               id_referencia_1: this.Estudiante.id_referencia_1,
               Referencia_1: this.Estudiante.Referencia_1,
               id_referencia_2: this.Estudiante.id_referencia_2,
               Referencia_2: this.Estudiante.Referencia_2,
               id_referencia_3: this.Estudiante.id_referencia_3,
               Referencia_3: this.Estudiante.Referencia_3,
               id_padrefamilia: this.Estudiante.id_padrefamilia


              }
              var urladmis = "Estudiante.Guardar";
              axios.post(urladmis,params)

              var urlEstud = "Estudiante";
              axios.get(urlEstud).then(response =>
              {
                this.Estud = response.data
              });
              $('#abrirmodal2').modal('hide');
              }

            },
            ObtenerTransito()
            {
            var urlEstud = "Transito";
            axios.get(urlEstud).then(response =>
            {
              this.Transito = response.data
            });
            },
            getEstud(){
            var urlEstud = "Estudiante";
            axios.get(urlEstud).then(response =>
            {
              this.Estud = response.data
            });


            },
            CrearEstudiante()
            {
            var urlEstud = "ObtenerTipoViaidad";
            axios.get(urlEstud).then(response =>
            {
              this.Tipo_via = response.data
              });


            },
            ObtenerTipoViaidad()
            {
            var urlEstud = "ObtenerTipoViaidad";
            axios.get(urlEstud).then(response =>
            {
              this.Tipo_via = response.data
              });


            },
            ObtenerTipoAdViaidad()
            {
            var urlEstud = "ObtenerAdmiTipoViaidad";
            axios.get(urlEstud).then(response =>
            {
              this.Tipo_admi_via = response.data
              });
            },
            ObtenerMargen()
            {
            var urlEstud = "ObtenerMargen";
            axios.get(urlEstud).then(response =>
            {
              this.Margen = response.data
              });
            },
            ObtenerTipoAs()
            {
            var urlEstud = "ObtenerAsentamientos";
            axios.get(urlEstud).then(response =>
            {
              this.TiposAsentamientos = response.data
              });
            },
            ObtenerReferencias()
            {
            var urlEstud = "Tipo_referencia";
            axios.get(urlEstud).then(response =>
            {
              this.Referencias = response.data
              });
            },
            ObtenerPadrefamilia()
            {
            var urladmis = "Padre";
            axios.get(urladmis).then(response =>
            {
              this.PradredeFamilis = response.data
            });
            },
            limpia()
            {
            this.Estudiante.Nombre = "";
             this.Estudiante.Apellido_P = "";
           this.Estudiante.Apellido_M =   "";
             this.Estudiante.CURP = "";
             this.Estudiante.Fecha_Nacimiento = "";
             this.Estudiante.Tipo_Vialidad = "";
             this.Estudiante.Tramo = "";
             this.Estudiante.id_administracion_vialidad = "";
             this.Estudiante.id_Transito = "";
             this.Estudiante.id_margen = "";
           this.Estudiante.Nombre_vialidad =  "";
             this.Estudiante.Kilometro = "";
             this.Estudiante.Numero_exterior = "";
             this.Estudiante.Numero_exterior_alfa = "";
             this.Estudiante.Numero_interior_alfa = "";
           this.Estudiante.Numero_interior = "";
             this.Estudiante.Codigo_postal = "";
           this.Estudiante.id_tipo_asentamiento = "";
           this.Estudiante.Nombre_asentamiento = "";
             this.Estudiante.id_referencia_1 = "";
             this.Estudiante.Referencia_1 = "";
             this.Estudiante.id_referencia_2 = "";
             this.Estudiante.Referencia_2 = "";
             this.Estudiante.id_referencia_3 = "";
             this.Estudiante.Referencia_3 = "";
             this.Estudiante.id_padrefamilia = "";
            },

            cargardatos(Estu)
            {
            console.log(Estu.id_transito);

            this.Estudiante.id = Estu.id;
            this.Estudiante.Nombre = Estu.Nombre;
             this.Estudiante.Apellido_P = Estu.Apellido_P;
           this.Estudiante.Apellido_M =   Estu.Apellido_M;
             this.Estudiante.CURP = Estu.CURP;
             this.Estudiante.Fecha_Nacimiento = Estu.Fecha_Nacimiento;
             this.Estudiante.Tipo_Vialidad = Estu.id_tipo_vialidad;
             this.Estudiante.Tramo = Estu.Tramo;
             this.Estudiante.id_administracion_vialidad = Estu.id_administracion_vialidad;
             this.Estudiante.id_Transito = Estu.id_transito;
             this.Estudiante.id_margen = Estu.id_margen;
           this.Estudiante.Nombre_vialidad =   Estu.Nombre_vialidad;
             this.Estudiante.Kilometro = Estu.Kilometro;
             this.Estudiante.Numero_exterior = Estu.Numero_exterior;
             this.Estudiante.Numero_exterior_alfa = Estu.Numero_exterior_alfa;
             this.Estudiante.Numero_interior_alfa = Estu.Numero_interior_alfa;
           this.Estudiante.Numero_interior = Estu.Numero_interior;
             this.Estudiante.Codigo_postal = Estu.Codigo_postal;
           this.Estudiante.id_tipo_asentamiento = Estu.id_tipo_asentamiento;
           this.Estudiante.Nombre_asentamiento = Estu.Nombre_asentamiento;
             this.Estudiante.id_referencia_1 = Estu.id_referencia_1;
             this.Estudiante.Referencia_1 = Estu.Referencia_1;
             this.Estudiante.id_referencia_2 = Estu.id_referencia_2;
             this.Estudiante.Referencia_2 = Estu.Referencia_2;
             this.Estudiante.id_referencia_3 = Estu.id_referencia_3;
             this.Estudiante.Referencia_3 = Estu.Referencia_3;
             this.Estudiante.id_padrefamilia = Estu.id_padrefamilia;
            },

            vermodal(Estu){

            this.ObtenerTipoViaidad();
            this.ObtenerTipoAdViaidad();
            this.ObtenerTransito();

            this.ObtenerMargen();
            this.ObtenerTipoAs();
            this.ObtenerReferencias();
            this.ObtenerPadrefamilia();
            this.cargardatos(Estu);
            $('#vermodal').modal('show');
            },

            editarmodal(Estu)
            {
            this.ObtenerTransito();
            this.ObtenerTipoViaidad();
            this.ObtenerTipoAdViaidad();
            this.ObtenerMargen();
            this.ObtenerTipoAs();
            this.ObtenerReferencias();
            this.ObtenerPadrefamilia();

            this.cargardatos(Estu);
            $('#editarmodal').modal('show');
            },
            capturardat()
            {

              if(this.Estudiante.Nombre == '' || this.Estudiante.Apellido_P == ''  || this.Estudiante.id_padrefamilia == '' || this.Estudiante.CURP == '' || this.Estudiante.Tipo_Vialidad == ''
              || this.Estudiante.Fecha_Nacimiento == '' || this.Estudiante.Tramo == '' || this.Estudiante.id_administracion_vialidad == '' || this.Estudiante.id_Transito == '' || this.Estudiante.id_margen == ''
              || this.Estudiante.Nombre_vialidad == '' || this.Estudiante.Numero_exterior == '' || this.Estudiante.Codigo_postal== '' || this.Estudiante.id_tipo_asentamiento == '' || this.Estudiante.id_referencia_1 == ''
              || this.Estudiante.Nombre_asentamiento == '' || this.Estudiante.Referencia_1 == '' || this.Estudiante.id_referencia_2 == '' || this.Estudiante.Referencia_2  == '')
              {
                  alert('Debes completar los campos requeridos para poder guardar');
                  return;
              }
              else
              {
              console.log (this.Estudiante.id_referencia_3);
              const params = {
                id:   this.Estudiante.id,
               Nombre: this.Estudiante.Nombre ,
               Apellido_P: this.Estudiante.Apellido_P,
               Apellido_M: this.Estudiante.Apellido_M,
               CURP: this.Estudiante.CURP,
               Fecha_Nacimiento: this.Estudiante.Fecha_Nacimiento,
               id_tipo_vialidad: this.Estudiante.Tipo_Vialidad,
               Tramo: this.Estudiante.Tramo,
               id_administracion_vialidad: this.Estudiante.id_administracion_vialidad,
               id_Transito: this.Estudiante.id_Transito,
               id_margen: this.Estudiante.id_margen,
               Nombre_vialidad: this.Estudiante.Nombre_vialidad,
               Kilometro: this.Estudiante.Kilometro,
               Numero_exterior: this.Estudiante.Numero_exterior,
               Numero_exterior_alfa: this.Estudiante.Numero_exterior_alfa,
               Numero_interior_alfa: this.Estudiante.Numero_interior_alfa,
               Numero_interior: this.Estudiante.Numero_interior,
               Codigo_postal: this.Estudiante.Codigo_postal,
               id_tipo_asentamiento: this.Estudiante.id_tipo_asentamiento,
               Nombre_asentamiento: this.Estudiante.Nombre_asentamiento,
               id_referencia_1: this.Estudiante.id_referencia_1,
               Referencia_1: this.Estudiante.Referencia_1,
               id_referencia_2: this.Estudiante.id_referencia_2,
               Referencia_2: this.Estudiante.Referencia_2,
               id_referencia_3: this.Estudiante.id_referencia_3,
               Referencia_3: this.Estudiante.Referencia_3,
               id_padrefamilia: this.Estudiante.id_padrefamilia
              }

              var urlEstud = "Estudiante.edit";
              axios.post(urlEstud,params);
              $('#editarmodal').modal('hide');
              }

              this.getEstud()

            },
            eliminarmodal(Estu)
            {
            this.ObtenerTipoViaidad();
            this.ObtenerTipoAdViaidad();
            this.ObtenerTransito();

            this.ObtenerMargen();
            this.ObtenerTipoAs();
            this.ObtenerReferencias();
            this.ObtenerPadrefamilia();
            this.cargardatos(Estu);
            $('#eliminarmodal').modal('show');
            },
            eliminar()
            {
            const params = {
              id:   this.Estudiante.id
              }
            var urladmis = "Estudiante.destroy";
            axios.post(urladmis,params)

            $('#eliminarmodal').modal('hide');

            this.getEstud();
            },
            abrirnuevo()
            {
                this.limpia();
                $('#abrirmodal2').modal('show');
            }

            }


          }


</script>
