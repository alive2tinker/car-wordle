<?php

use App\Http\Controllers\CarController;
use App\Http\Livewire\CarWordle;
use App\Models\Car;
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



Route::get('/dashboard', function () {
    return view('dashboard', [
        'cars' => Car::orderby('created_at','desc')->paginate(5)
    ]);
})->middleware(['auth'])->name('dashboard');



Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', CarWordle::class);
    Route::resource('cars', CarController::class);
});

require __DIR__.'/auth.php';


