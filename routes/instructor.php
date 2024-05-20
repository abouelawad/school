<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\InstructorController;

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

Route::prefix('instructor')->middleware(['auth', 'verified','role:instructor'])->group(function(){
  Route::get('dashboard',[InstructorController::class,'index'])->name('instructor.dashboard');
});
