<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Home;
use App\Http\Livewire\Product;
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


Auth::routes();

Route::get('/', Home::class)->name('home');
Route::get('/products', Product::class);
Route::get('/blog', Blog::class);

Route::prefix('admin')->group(function () {
    Route::get('dashboard', Dashboard::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
