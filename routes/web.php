<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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
Route::resource('users', UserController::class);

/*Route::get('/in',[StudentController::class, 'index']);
Route::get('/cr',[StudentController::class, 'create']);
Route::post('/store',[StudentController::class, 'store']);
Route::get('/sh',[StudentController::class, 'show']);
Route::get('/edit',[StudentController::class, 'edit']);
*/


/**Route::get('/in',[UserController::class, 'index']);
Route::get('/cr',[UserController::class, 'create']);
//Route::get('/store',[UserController::class, 'store']);
Route::post('/store',[UserController::class, 'store']);
Route::get('/sh',[UserController::class, 'show']);
Route::get('/edit',[UserController::class, 'edit']);
*/

