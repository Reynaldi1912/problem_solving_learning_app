<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\jelajahIdeController;


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
// Route::resource('/home', jelajahIdeController::class);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'exit'])->name('exit');
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\jelajahIdeController::class, 'index'])->name('home');

// Route::prefix('/detail')->group(function(){
//     Route::get('/gambaran-ide', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
//     Route::get('/fitur', [App\Http\Controllers\HomeController::class, 'fitur'])->name('fitur');
// });
    Route::get('/gambaran-ide', [App\Http\Controllers\HomeController::class, 'gambaran_ide'])->name('gambaran_ide');
    Route::get('/fitur', [App\Http\Controllers\HomeController::class, 'fitur'])->name('fitur');
    Route::get('/teknologi-digunakan', [App\Http\Controllers\HomeController::class, 'teknologi_digunakan'])->name('teknologi');
    Route::get('/diagram-proses', [App\Http\Controllers\HomeController::class, 'diagram_proses'])->name('diagram');
    Route::get('/desain', [App\Http\Controllers\HomeController::class, 'desain'])->name('desain');





Route::get('auth/github', [GitHubController::class, 'gitRedirect']);
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);


// Detail
Route::get('gambaran-ide/{id}', [App\Http\Controllers\detailController::class, 'detail'])->name('gambaran-ide.show');
Route::get('fitur/{id}', [App\Http\Controllers\detailController::class, 'fitur'])->name('fitur.show');
Route::get('teknologi/{id}', [App\Http\Controllers\detailController::class, 'teknologi'])->name('teknologi.show');
Route::get('diagram-proses/{id}', [App\Http\Controllers\detailController::class, 'diagramproses'])->name('diagramproses.show');
Route::get('desain/{id}', [App\Http\Controllers\detailController::class, 'desain'])->name('desain.show');

Route::get('/kerjakan-ide/pilih-teknologi-dan-tools/{id}', [App\Http\Controllers\kerjakanController::class, 'kerjakan1'])->name('kerjakan1');
Route::get('/kerjakan-ide/pilih-fitur/{id}', [App\Http\Controllers\kerjakanController::class, 'kerjakan2'])->name('kerjakan2');
Route::get('/kerjakan-ide/tentukan-deliverables/{id}', [App\Http\Controllers\kerjakanController::class, 'kerjakan3'])->name('kerjakan3');
Route::get('/kerjakan-ide/pilih-jadwal/{id}', [App\Http\Controllers\kerjakanController::class, 'kerjakan4'])->name('kerjakan4');

Route::POST('/kerjakan-ide/pilih-teknologi-dan-tools/{id}', [App\Http\Controllers\kerjakanController::class, 'store_teknologi'])->name('teknologi.store');
Route::POST('/kerjakan-ide/pilih-fitur/{id}', [App\Http\Controllers\kerjakanController::class, 'store_fitur'])->name('fitur.store');
Route::POST('/kerjakan-ide/tentukan-deliverables/{id}', [App\Http\Controllers\kerjakanController::class, 'store_delivirables'])->name('delivirables.store');
Route::POST('/kerjakan-ide/pilih-jadwal/{id}', [App\Http\Controllers\kerjakanController::class, 'store_jadwal'])->name('jadwal.store');










