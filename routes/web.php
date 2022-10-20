<?php

use App\Http\Controllers\{
    Judicials\JudicialController,
    SettingController,
};

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

Route::get('/', fn () => redirect()->route('login'));

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::resource('judicials', JudicialController::class);
    Route::post('delete_all_j', [JudicialController::class, 'delete_all_j'])->name('delete_all_j');
    Route::post('UploadAttachment', [JudicialController::class, 'UploadAttachment'])->name('UploadAttachment');
    Route::get('DownloadAttachment/{judicialsname}/{filename}', [JudicialController::class, 'DownloadAttachment'])->name('DownloadAttachment');
    Route::post('DeleteAttachment', [JudicialController::class, 'DeleteAttachment'])->name('DeleteAttachment');

    Route::resource('settings', SettingController::class);
});
