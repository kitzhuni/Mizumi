<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RestaurantsMundoImperialController;
use App\Http\Controllers\PalacioMundoImperialController;
use App\Http\Controllers\MizumiMundoImperialController;
use App\Http\Controllers\ReservacionConfirmadaController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\RegistroUsuariosController;
use App\Http\Controllers\PanoramaGeneralController;
use App\Http\Controllers\RegistroUsuarioController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\EditarController;
use App\Http\Controllers\AñadirrestauranteController;
use App\Http\Controllers\TablarestaurantesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\TablaUsuariosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ReservacionController;
use App\Http\Controllers\MapController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/restaurantsmundoimperial', [App\Http\Controllers\RestaurantsMundoImperialController::class, 'index']);

Route::get('/palaciomundoimperial', [App\Http\Controllers\PalacioMundoImperialController::class, 'index']);
Route::get('/pierremundoimperial', [App\Http\Controllers\PierreMundoImperialController::class, 'index']);
Route::get('/princessmundoimperial', [App\Http\Controllers\PrincessMundoImperialController::class, 'index']);

route::get('/mizumimundoimperial', [App\Http\Controllers\MizumiMundoImperialController::class, 'index']);
route::get('/carnivoremundoimperial', [App\Http\Controllers\CarnivoreMundoImperialController::class, 'index']);
route::get('/marchemundoimperial', [App\Http\Controllers\MarcheMundoImperialController::class, 'index']);
route::get('/aromamundoimperial', [App\Http\Controllers\ARomaMundoImperialController::class, 'index']);
route::get('/acuamundoimperial', [App\Http\Controllers\AcuaMundoImperialController::class, 'index']);
route::get('/mexcallimundoimperial', [App\Http\Controllers\MexcalliMundoImperialController::class, 'index']);
route::get('/delimundoimperial', [App\Http\Controllers\DeliMundoImperialController::class, 'index']);
route::get('/scalamundoimperial', [App\Http\Controllers\ScalaMundoImperialController::class, 'index']);
route::get('/club89mundoimperial', [App\Http\Controllers\Club89MundoImperialController::class, 'index']);
route::get('/blubarmundoimperial', [App\Http\Controllers\BlubarMundoImperialController::class, 'index']);
route::get('/serenitymundoimperial', [App\Http\Controllers\SerenityMundoImperialController::class, 'index']);
route::get('/poolbarmundoimperial', [App\Http\Controllers\PoolbarMundoImperialController::class, 'index']);
route::get('/terrazamundoimperial', [App\Http\Controllers\TerrazaMundoImperialController::class, 'index']);
route::get('/barpierremundoimperial', [App\Http\Controllers\BarpierreMundoImperialController::class, 'index']);
route::get('/tabachinmundoimperial', [App\Http\Controllers\TabachinMundoImperialController::class, 'index']);
route::get('/pierresmundoimperial', [App\Http\Controllers\PierresMundoImperialController::class, 'index']);
route::get('/roomdiningmundoimperial', [App\Http\Controllers\RoomdiningMundoImperialController::class, 'index']);
route::get('/chulamundoimperial', [App\Http\Controllers\ChulaMundoImperialController::class, 'index']);
route::get('/condesamundoimperial', [App\Http\Controllers\CondesaMundoImperialController::class, 'index']);
route::get('/tavolamundoimperial', [App\Http\Controllers\TavolaMundoImperialController::class, 'index']);
route::get('/azulmundoimperial', [App\Http\Controllers\AzulMundoImperialController::class, 'index']);
route::get('/beachmundoimperial', [App\Http\Controllers\BeachMundoImperialController::class, 'index']);
route::get('/cafemundoimperial', [App\Http\Controllers\CafeMundoImperialController::class, 'index']);


route::get('/reservacionmesa', [App\Http\Controllers\ReservacionMesaController::class, 'show']);

Route::get('/reservation/{reservationId}', [ReservationController::class, 'showReservation']);




Route::post('/reservaciones', [ReservationController::class, 'store'])->name('reservaciones.store');



// routes/web.php
Route::put('/reservaciones/{reservacion}', [ReservacionController::class, 'update'])->name('reservaciones.update');














// Rutas para la reservación de sillas
Route::get('/reservacionsillas', [App\Http\Controllers\ReservacionSillasController::class, 'index'])->name('reservacionsillas.index');
Route::post('/reservacionsillas', [App\Http\Controllers\ReservacionSillasController::class, 'store'])->name('reservacionsillas.store');

// Ruta para la confirmación de la reservación
Route::get('/reservacionconfirmada', [ReservacionConfirmadaController::class, 'show'])->name('reservacionconfirmada.show');

// Ruta para la confirmación de la reservación prueba
Route::get('/reservationdetails', [detallesController::class, 'show'])->name('reservacionconfirmada.show');

// Ruta para mostrar el formulario de inicio de sesión (GET)
Route::get('/iniciosesion', [InicioSesionController::class, 'index'])->name('iniciosesion.index');

// Ruta para procesar el formulario de inicio de sesión (POST)
Route::post('/login', [InicioSesionController::class, 'login'])->name('iniciosesion.login');

// Ruta para resgistrar usuario
Route::get('/registrousuarios', [RegistroUsuariosController::class, 'index'])->name('registrousuarios.index');
Route::post('/registrousuarios', [RegistroUsuariosController::class, 'store'])->name('registrousuarios.store');

Route::post('/registrousuarios', [RegistroUsuarioController::class, 'store'])->name('registrousuarios.store');

// Ruta para pagina de sesion iniciada
Route::get('/panoramageneral', [PanoramaGeneralController::class, 'index'])->name('panoramageneral.index');

Route::get('/iniciosesion', function () {
    return view('iniciosesion'); // Esto carga la vista iniciosesion.blade.php
})->name('iniciosesion'); // Nombrar la ruta



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/panoramageneral', [AuthController::class, 'panoramaGeneral'])->name('panoramageneral');

Route::get('/panoramageneral', [AuthController::class, 'panoramaGeneral'])->name('panoramageneral')->middleware('auth');


Route::get('/panoramageneral', [PanoramaGeneralController::class, 'index'])->name('panoramageneral');

// Ruta para actualizacion de estatus Restaurant


Route::post('/guardar-estatus', [RestauranteController::class, 'guardarEstatus']);

Route::get('/editar', [EditarController::class, 'index'])->name('editar.index');
Route::get('/editar', [AuthController::class, 'editar'])->name('editar')->middleware('auth');

// Ruta para añadir restaurante
Route::get('/añadirrestaurante', [AñadirrestauranteController::class, 'index'])->name('añadirrestaurante');
Route::get('/añadirrestaurante', [AuthController::class, 'añadirrestaurante'])->name('añadirrestaurante')->middleware('auth');

Route::post('/restaurantes', [RestauranteController::class, 'store'])->name('restaurantes.store');

Route::get('/restaurantes/{id}/editar', [RestauranteController::class, 'edit'])->name('restaurantes.edit');

Route::put('/restaurantes/{id}', [RestauranteController::class, 'update'])->name('restaurantes.update');

// Ruta para Abrir la opcion Restaurantes
Route::get('/tablarestaurantes', [TablaRestaurantesController::class, 'index'])->name('tablarestaurantes');
Route::get('/tablarestaurantes', [TablarestaurantesController::class, 'tablarestaurantes'])->name('tablarestaurantes')->middleware('auth');

/// pruebas

// Ruta para Abrir la tablausuarios
//Route::get('/tablausuarios', [TablaUsuariosController::class, 'index'])->name('tablausuarios');
//Route::get('/tablausuarios', [TablaUsuariosController::class, 'tablausuarios'])->name('tablausuarios')->middleware('auth');

// Ruta para mostrar la tabla de usuarios (accesible sin autenticación)
Route::get('/tablausuarios', [TablaUsuariosController::class, 'index'])->name('tablausuarios.index');

// Ruta para realizar alguna acción específica en la tabla de usuarios (requiere autenticación)
Route::get('/tablausuarios/accion', [TablaUsuariosController::class, 'tablausuarios'])->name('tablausuarios.accion')->middleware('auth');
Route::get('/user/obtener', [UserController::class, 'obtener'])->name('user.obtener');

/// RUTA PARA LA EDICION DE USUARIOS y ELIMINAR

// Ruta para editar un usuario
//Route::get('/usuarios/editar/{id}', [UsuariosController::class, 'editar'])->name('usuarios.editar');
Route::get('/usuarios/editar/{id}', [UsuariosController::class, 'editar'])->name('usuarios.editar');

// Ruta para actualizar un usuario
Route::put('/usuarios/actualizar/{id}', [UsuariosController::class, 'actualizar'])->name('usuarios.actualizar');

// Ruta para mostrar la tabla de usuarios
Route::get('/tablausuarios', [UsuariosController::class, 'index'])->name('tablausuarios');

// Ruta para eliminar un usuario
Route::delete('/usuarios/eliminar/{id}', [UsuariosController::class, 'eliminar'])->name('usuarios.eliminar');

////////

// Ruta para mostrar la lista de restaurantes
Route::get('/restaurantes', [RestauranteController::class, 'index'])->name('restaurantes.index');

// Ruta con middleware de autenticación
Route::get('/tablarestaurantes', [TablarestaurantesController::class, 'tablarestaurantes'])->name('tablarestaurantes')->middleware('auth');

Route::get('/restaurantes', [RestauranteController::class, 'obtenerUsuarios'])->name('restaurantes.obtener');

//pruebas
Route::get('/usuarios', [UsuariosController::class, 'obtenerUsuarios'])->name('user.obtener');

// Definir la ruta con el parámetro id
Route::get('/restaurantes/{id}', [RestauranteController::class, 'infoRestaurantes'])->name('restaurantes.info');


// Ruta para la actualización de estatus y montaje
Route::post('/restaurantes/actualizarEstatus', [RestauranteController::class, 'actualizarEstatus'])->name('restaurantes.actualizarEstatus');

// Ruta para Editar restaurante
Route::get('/editar/{id}', [RestauranteController::class, 'editar'])->name('restaurante.editar');
Route::get('/editar/{id}', [AuthController::class, 'editar']);

// Ruta para obtener los datos del restaurante
Route::get('/restaurantes', [RestauranteController::class, 'index'])->name('restaurantes.index');

Route::get('/restaurantes/{id}', [RestauranteController::class, 'show'])->name('restaurantes.show');

Route::put('/restaurantes/{id}', [RestauranteController::class, 'update'])->name('restaurantes.update');
Route::get('restaurantes/{id}/edit', [RestauranteController::class, 'edit'])->name('restaurantes.edit');


// Ruta para mostrar la lista de Usuarios
Route::get('/usuarios', [RegistroUsuarioController::class, 'index']);
Route::post('/usuarios', [RegistroUsuarioController::class, 'store']);

Route::get('/web/usuarios', [RegistroUsuarioController::class, 'obtenerUsuarios']);


Route::resource('maps', MapController::class)->except(['store']);
Route::post('/maps', [MapController::class, 'store'])->name('maps.store');

Route::put('/maps/{map}', [MapController::class, 'update'])->name('maps.update');
// Asegúrate de que esta ruta exista
Route::get('/reservaciones', [ReservacionController::class, 'index'])
     ->name('reservaciones.index');
     Route::get('/reservaciones', [ReservacionController::class, 'index'])->name('reservaciones.index');
Route::delete('/reservaciones/{reservacion}', [ReservacionController::class, 'destroy'])->name('reservaciones.destroy');


// Ruta para mostrar el mapa de Mizumi
Route::get('/reservacionmesa', [MapController::class, 'showMizumi'])->name('reservacionmesa');

// Ruta API para obtener datos del mapa (JSON)
Route::get('/api/maps/mizumi', [MapController::class, 'getMizumiMap']);




Route::get('/mesas/en-proceso', [MesaController::class, 'mesasEnProceso']);
Route::post('/mesas/en-proceso', [MesaController::class, 'marcarEnProceso']);
Route::post('/mesas/liberar', [MesaController::class, 'liberarMesa']);
Route::post('/reservaciones/confirmar', [ReservacionController::class, 'confirmarReservacion']);





Route::prefix('maps')->group(function () {
    Route::get('/', [MapController::class, 'index'])->name('maps.index');
    Route::get('/create', [MapController::class, 'create'])->name('maps.create');
    Route::post('/', [MapController::class, 'store'])->name('maps.store');
    Route::get('/{id}', [MapController::class, 'show'])->name('maps.show');
});




Route::prefix('reservacion')->group(function() {
    Route::get('/restaurantes/obtener', [RestauranteController::class, 'obtenerRestaurantes'])->name('restaurantes.obtener');
    Route::post('/start-timer', [ReservacionController::class, 'startTimer'])->name('reservacion.startTimer');
    Route::get('/check-time', [ReservacionController::class, 'checkTime'])->name('reservacion.checkTime');
    Route::post('/cancel', [ReservacionController::class, 'cancel'])->name('reservacion.cancel');
});

Route::get('/reservar/mesa', [ReservacionController::class, 'mostrarMesas'])->name('reservar.mesa');
Route::get('/reservar/sillas', [ReservacionController::class, 'reservarSillas'])->name('reservar.sillas');

// routes/web.php

//prueba descartable  
#region
Route::get('/reservacion2', function () {
    return view('reservacion2', [
        'fecha' => request('fecha'),
        'nombre' => request('nombre'),
        'hora' => request('hora'),
        'mesa' => request('mesa'),
        'asientos' => request('asientos'),
        'telefono' => request('telefono'),
        'email' => request('email'),
    ]);
})->name('reservacion2');
#endregion

Route::get('/reservacion',function (Request $request) {
    $data = json_decode($request->query('data'),true);
    return view('reservacion',compact('data'));
});






