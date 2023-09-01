<?php

use App\Http\Controllers\ClassementsController;
use App\Http\Controllers\ResultatsController;
use App\Http\Controllers\EquipesController;
use App\Http\Controllers\MatchsController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\JoueursController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::resource('index', ClassementsController::class)->middleware(['auth']);
Route::resource('index', ResultatsController::class)->middleware(['auth']);
Route::resource('index', EquipesController::class)->middleware(['auth']);
Route::resource('index', MatchsController::class)->middleware(['auth']);
Route::resource('index', SportsController::class)->middleware(['auth']);
Route::resource('index', JoueursController::class)->middleware(['auth']);

/*Route::middleware('auth')->group(function () {
    Route::get('/index', [ProfileController::class, 'edit'])->name('index.edit');
    Route::patch('/index', [ProfileController::class, 'update'])->name('index.update');
    Route::delete('/index', [ProfileController::class, 'destroy'])->name('index.destroy');
});*/
/*
Route::delete('/Classements/{id}', [ClassementsController::class, 'destroy'])->name('Classements.destroy');
Route::delete('/Resultats/{id}', [ResultatsController::class, 'destroy'])->name('Resultats.destroy');
Route::delete('/Equipes/{id}', [EquipesController::class, 'destroy'])->name('Equipes.destroy');
Route::delete('/Matchs/{id}', [MatchsController::class, 'destroy'])->name('Matchs.destroy');
Route::delete('/Sports/{id}', [SportsController::class, 'destroy'])->name('Sports.destroy');
Route::delete('/joueurs/{id}', [JoueursController::class, 'destroy'])->name('joueurs.destroy');

Route::get('/rechercher', [joueurController::class, 'rechercher'])->name('search');
Route::get('/joueurs/{tri?}', [JoueurController::class, 'index'])->name('joueurs.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', 'UserController')->middleware('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    // Routes pour l'administration de l'application
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
    Route::get('/admin/users',[ UserController::class,'index'])->name('users.index');
    Route::get('/admin/users/create', [UserController::class,'create'])->name('users.create');
    Route::post('/admin/users', [UserController::class,'store'])->name('users.store');
    Route::get('/admin/users/{id}/edit', [UserController::class,'edit'])->name('users.edit');
    Route::put('/admin/users/{id}', [UserController::class,'update'])->name('users.update');
    Route::delete('/admin/users/{id}', [UserController::class,'destroy'])->name('users.destroy');
});

Route::middleware(['auth'])->group(function () {
    // Routes pour les fonctionnalités générales de l'application
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::get('/sports', [SportsController::class,'index'])->name('sports.index');
    Route::get('/sports/{id}', [SportsController::class,'show'])->name('sports.show');
    Route::get('/equipes', [EquipesController::class,'index'])->name('equipes.index');
    Route::get('/equipes/{id}', [EquipesController::class,'show'])->name('equipes.show');
    Route::get('/joueurs', [JoueursController::class,'index'])->name('joueurs.index');
    Route::get('/joueurs/{id}', [JoueursController::class,'show'])->name('joueurs.show');
    Route::get('/matches', [MatchsController::class,'index'])->name('matches.index');
    Route::get('/matches/{id}', [MatchsController::class,'show'])->name('matches.show');
    Route::get('/resultats', [ResultatsController::class,'index'])->name('resultats.index');
    Route::get('/classements', [ClassementsController::class,'index'])->name('classements.index');
});

Route::get('/joueurs/{id}/stats', [JoueursController::class,'stats'])->name('joueurs.stats');
*/