<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/panel', 'HomeController@plantilla');
Route::get('/buscarmascota', 'Mascotas\MascotaController@getViewBuscar');

Route::get('/user/registro', 'UsuarioController@viewRegistro');
Route::post('/user/save', 'UsuarioController@saveRegistro');

Route::get('/user/modificar', 'UsuarioController@viewModificar');
Route::post('/user/modificar/save', 'UsuarioController@saveModificar');
Route::get('/user/modificar', 'UsuarioController@viewModificar');
Route::post('/user/modificarUsuario', 'UsuarioController@viewModificarUsuario');

Route::post('/user/saveModificarUsuario', 'UsuarioController@modificar');
Route::Resource('users', 'GestionUsuarioController');

//RUTAS RFDID
Route::get('/rfid', 'RfidController@viewRfid');
Route::post('/rfid/save', 'RfidController@saveRfid');
//RUTAS RFID MASIVO
Route::get('/rfids', 'RfidController@viewRfids');
Route::post('/rfids/save', 'RfidController@saveRfids');

//RUTAS MASCOTAS
Route::get('/mascota', 'Mascotas\MascotaController@viewMascota');
Route::get('/mascota/buscar', 'Mascotas\MascotaController@buscarMascota');
Route::post('/mascota/save', 'Mascotas\MascotaController@saveMascota');
Route::post('/mascota/Mbuscar', 'Mascotas\MascotaController@ServiceBuscar');
Route::post('/mascota/MUbuscar', 'Mascotas\MascotaController@ServiceBuscarU');

//RUTAS VETERINARIA

Route::get('/veterinaria/registro', 'VeterinariaController@viewRegistroVeterinaria');
Route::post('/veterinaria/save', 'VeterinariaController@saveVeterinaria');
Route::get('/listaveterinaria', 'VeterinariaController@viewListVeterinaria');


Route::get('/datatables','DataTablesController@getIndex');
Route::get('/anyData','DataTablesController@anyData')->name('datatables.data');


Route::resource('mascotas', 'MascotaController');
Route::resource('usuarios', 'UserController');
Route::resource('veterinarias', 'VeterinariadtController');
Route::resource('rfid_dt', 'RriddtController');