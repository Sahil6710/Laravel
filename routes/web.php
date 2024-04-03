<?php
use App\Http\Controllers\registerdataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
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

// Route::get('/', function () {
//     return view('registerdata');
// });

// Route::get('/','registerdataController@index');


Route::get('/',function(){
    return view('login');
});

Route::post('/login', [Authcontroller::class, 'login'])->name('login');
Route::get('/register-data', [registerdataController::class, 'registerdata'])->name('registerdata');