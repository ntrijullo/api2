<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('estudiantes', 'App\Http\Controllers\EstudiantesController');
Route::get('estudiantes-carrera/{carrera}', 'App\Http\Controllers\EstudiantesController@carrera');
//Route::get('/estudiantes', 'App\Http\Controllers\EstudiantesController@index');