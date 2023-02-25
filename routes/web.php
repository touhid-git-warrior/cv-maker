<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CvGeneratorController;
use Illuminate\Support\Facades\Artisan;


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

Route::get('/clear-cache', function () {
   Artisan::call('cache:clear');
   Artisan::call('route:clear');
   Artisan::call('view:clear');
   Artisan::call('config:clear');
   return redirect()->route('dashboard')->with(['key'=>200]);
})->name('clear');

Route::get('/',[FrontendController::class,'IndexView']);
Route::get('/dashboard', function () {
    return view('frontend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mycv', [CvGeneratorController::class, 'ViewFirstCv'])->name('firstcv');
    Route::get('/cvinfoadd', [CvGeneratorController::class, 'CvinfoAdd'])->name('cvadd');
    Route::post('/cvinfosave', [CvGeneratorController::class, 'CvinfoSave'])->name('cvsave');
    Route::get('/cvedate', [CvGeneratorController::class, 'CvEdate'])->name('cvedate');
    Route::post('/cvupdate', [CvGeneratorController::class, 'CvUpdate'])->name('cvupdate');
    Route::post('/cvremove', [CvGeneratorController::class, 'CvRemove'])->name('cvremove');




    

});

require __DIR__.'/auth.php';
