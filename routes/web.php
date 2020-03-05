<?php
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

// Rutas del perfil
Route::get('/profile', "usuarioController@show")->name("perfil")->middleware('auth');

Route::post('/profile', "usuarioController@update");

Route::put('/profile/datosUsuario', "usuarioController@updateDatosUsuario");

Route::put('/profile/datosContacto', "usuarioController@updateContactoUsuario");

// Rutas de categorias
Route::get('/Categorias', 'HomeController@todasCategorias')->name('categorias');

Route::get('/Categorias/{id}', 'HomeController@detalleCategoria')->name('detallecategorias');

// Ruta de autentificador
Auth::routes();

// Rutas comunes
Route::get('/home', 'HomeController@index')->name('index');

Route::get('/Nosotros', 'HomeController@acerca')->name('acercade');

Route::get('/FAQ', 'HomeController@faq')->name('FAQ');

// Rutas de productos
Route::get('/productos', 'ProductosController@index')->name('productos')->middleware('auth');

Route::get('/buscar', 'ProductosController@busqueda')->name('busquedaProductos');

Route::get('/agregarProducto', 'ProductosController@formulario')->name('agregarProducto')->middleware('auth');

Route::post('/agregarProducto', 'ProductosController@agregar');

Route::get('/detalleProducto/{id}', 'ProductosController@detalle')->name('detalleProducto');

Route::get('/editarProducto/{id}', 'ProductosController@editar')->name('editarProducto')->middleware('auth');

Route::put('/editarProducto', 'ProductosController@actualizar');

// Rutas de Administradores
Route::get('/Administradores', 'AdministradorController@index')->name('admin.listadoAdmin');

Route::get('/Administradores/crear', 'AdministradorController@create')->name('admin.userscreate');

Route::post('/Administradores/crear', 'AdministradorController@store');

Route::get('/Administradores/{id}/editar', 'AdministradorController@edit');

Route::put('/Administradores', 'AdministradorController@update');

Route::get('/Administradores/usuarios/{id}/destroy', 'AdministradorController@destroy');

Route::get('/Administradores/nuevaCategoria', 'AdministradorController@crearcategoria')->name('admin.crearCategoria');

Route::get('/Administradores/productos', 'AdministradorController@prod')->name('admin.adminproductos');

Route::post('/Administradores/nuevaCategoria', 'AdministradorController@guardarCategoria');

// Ruta de compra
Route::get('/compra', function(){
    return redirect('/home');
});

Route::post('/compra', 'usuarioController@comprar');

if (Auth::user() == true) {
    Route::get('/comprado', function(){
        return view('comprado');
    });
} else {
    Route::get('/comprado', function(){
        return redirect('/home');
    });
}
