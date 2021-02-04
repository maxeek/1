<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| RouteServiceProvider carga las rutas dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Rourte::get ('peticion', proceso);

Route:: get('/hola', function (){

    return 'Hola mundo';
});

Route::get('/x/{nombre}', function ($nombre) {
    return view('inicio', ['nombre' => $nombre]);
});

Route:: view('/prueba', 'prueba');
Route:: view('/inicio', 'inicio');
Route:: view('/f', 'formulario');
Route:: view('/formulario', 'formulario');
Route::post('/procesarDatos', function (){
    $nombre = $_POST['nombre']; // captura de dato desde form
    $anio = $_POST['anio'];
    /*
        falta pasar dato a la view
        y haremos usando un array asociativo
    */
    return view('procesarDatos',
                [
                    'nombre' => $nombre,
                    'anio' => $anio
                ]
                );


});

#################
## BASE DE DATOS usando RawSQL
Route::get('/regiones', function (){
    $regiones = DB::select(
                            'SELECT regID, regNombre
                                FROM regiones'
                          );
    return view('adminRegiones',
                        [ 'regiones'=> $regiones ]
                );
});
#listado de destinos
Route::get('/destinos', function (){
    $destinos = DB::select(
                            'SELECT
                                    destID, destNombre,
                                    d.regID, regNombre,
                                    destPrecio,
                                    destAsientos, destDisponibles
                                FROM destinos d, regiones r
                                WHERE d.regID = r.regID'
                        );
    return view('adminDestinos',
                    [ 'destinos' => $destinos ]
                );
});

# Raw SQL
####
/* select()
 * insert()
 * update()
 * delete()
 */


Route::view('/agregarRegion', 'agregarRegion');

Route::post('/agregarRegion', function (){
    $regNombre = $_POST['regNombre'];
    DB::insert(
                'INSERT INTO regiones
                        ( regNombre )
                    VALUES
                        ( ? )', [$regNombre]
    );

    return redirect('/regiones')
        ->with('mensaje', 'Región: '.$regNombre.' agregada correctamente');;
});
