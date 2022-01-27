<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CategoriesController; //Importamos el componente de categorias

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

Route::get('/dashboard', function() {
    return view('dashboard.dashboard');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::post('logout', 'LogoutController@store')->name('logout');

Route::get('categories', CategoriesController::class); //Creamos el nombre de la ruta del componente y va a ejecutar la funcion render del controlador;