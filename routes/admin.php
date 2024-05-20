<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::prefix('admin')->middleware(['auth', 'verified','role:admin'])->group(function(){
  Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
  Route::resource('category', CategoryController::class);

});

// Route::middleware(['auth', 'verified'])->group(function () {
//   Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
// });
