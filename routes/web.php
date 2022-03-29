<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RekamController;
use App\Models\Pasien;
use App\Models\Dokter;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/formulir', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/rekam', [RekamController::class, 'index']);
Route::get('/rekam/{rekam:slug}', [RekamController::class, 'content']);

Route::get('/pasien', function()
{
    return view('pasien', [
        'title' => 'Rekam Pasien',
        'pasien' => Pasien::all()
    ]);
});

Route::get('/pasien/{pasien:id}', function(Pasien $pasien)
{
    return view('rekam', [
        'title' => "Rekam by Pasien : $pasien->nama",
        'rekams' => $pasien->rekam->load('pasien', 'dokter'),
        //'category' => $category->name
    ]);
});

Route::get('/dokter', function()
{
    return view('dokter', [
        'title' => 'Post Dokter',
        'dokter' => Dokter::all()
    ]);
});

Route::get('/dokter/{dokter:id}', function(Dokter $dokter)
{
    return view('rekam', [
        'title' => "Post by Dokter : $dokter->nama",
        'rekams' => $dokter->rekam->load('dokter', 'pasien'),
        //'author' => $author->name
    ]);
});
