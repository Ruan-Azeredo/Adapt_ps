<?php
use App\Http\Controllers\MovieController;
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

// Route::get('/', function () {         | Local onde se define as rotas, que estão |
//     return view('welcome');           | diretamente ligadas aos controllers      |
// });


Route::resource('/movies', MovieController::class);

Route::get("movies/search", [MovieController::class, "search"])->name("movie.search");