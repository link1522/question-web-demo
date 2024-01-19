<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    // Route::post('/questions', [QuestionController::class, 'store'])->name('voyager.questions.store');
    // Route::put('questions/{id}', [QuestionController::class, 'update'])->name('voyager.questions.update');
});
