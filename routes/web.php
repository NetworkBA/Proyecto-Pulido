<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::Post('/Clases.save', 'clases_controller@save');

Route::get('/Clases', 'clases_controller@Clases');


Route::Post('/Materias.store', 'Materias_controller@store');
Route::Post('/Materias.editar', 'Materias_controller@editar');
Route::get('/Materias', 'Materias_controller@index');
Route::Post('/Materias.eliminar', 'Materias_controller@destroy');




Route::get('/Estudiante', 'Estudiante_controller@index');
Route::get('/ObtenerTipoViaidad', 'Estudiante_controller@ObtenerTipoViaidad');
Route::get('/ObtenerAdmiTipoViaidad', 'Estudiante_controller@ObtenerAdmiTipoViaidad');
Route::get('/ObtenerMargen', 'Estudiante_controller@ObtenerMargen');
Route::get('/ObtenerAsentamientos', 'Estudiante_controller@ObtenerAsentamientos');
Route::get('/Tipo_referencia', 'Estudiante_controller@ObtenerReferencias');
Route::get('/Transito', 'Estudiante_controller@Transito');



Route::post('/Estudiante.Guardar', 'Estudiante_controller@GuardarEstudiante');
Route::post('/Estudiante.edit', 'Estudiante_controller@edit');
Route::post('/Estudiante.destroy', 'Estudiante_controller@destroy');














Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Administrativo', 'Administrativo_Controller@index');

Route::post('/Administrativo.Crear', 'Administrativo_Controller@store');

Route::post('/Administrativo.Editar', 'Administrativo_Controller@edit');

Route::post('/Administrativo.Destroy', 'Administrativo_Controller@destroy');

Route::get('/Profesor', 'profesores_controller@index');

Route::post('/Profesor.Crear', 'profesores_controller@store');

Route::post('/Profesor.Editar', 'profesores_controller@edit');

Route::post('/Profesor.Destroy', 'profesores_controller@destroy');




Route::get('/Padre', 'padrefamilia_controller@index');

Route::post('/Padre.Crear', 'padrefamilia_controller@store');

Route::post('/Padre.Editar', 'padrefamilia_controller@edit');

Route::post('/Padre.Destroy', 'padrefamilia_controller@destroy');
