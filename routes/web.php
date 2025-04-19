<?php



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

/* 
GET : LECTURE
POST : AJOUTER
PUT : MODIFICATION COMPLEXE 
PATCH : MODIFICATION PARTIELLE
DELETE

CONNECT
OPTIONS
*/

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LoginController;

Route::get('/', [homeController::class, 'index'])
->name('homepage');


Route::get('/login', [LoginController::class, 'show'])
->name('login.show');
Route::post('/login', [LoginController::class, 'login'])
->name('login');

Route::get('/profiles/create', [ProfileController::class, 'create'])
->name('profiles.create');


Route::get('/logout', [LoginController::class, 'logout'])
->name('login.logout');



Route::post('/profiles/store', [ProfileController::class, 'store'])
->name('profiles.store');

Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])
->name('profiles.destroy');

Route::get('/profiles/{profile}/edit',[ProfileController::class,'edit'])
->name('profiles.edit');
Route::put('/profiles/{profile}',[ProfileController::class,'update'])
->name('profiles.update');

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/information', [InformationController::class, 'index'])->name('information.index');
Route::get('/profiles/{profile}', [ProfileController::class, 'show'])

->where('id','\d+') 
//\d+ ca veut dire decimal

->name('profiles.show');


