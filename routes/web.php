<?php

use App\Http\Controllers\CustomerController;
use App\Livewire\Customers;
use App\Livewire\Products;
use App\Livewire\Vendors;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/cus',[CustomerController::class,'index'])->name('customer.index');
Route::get('/products',Products::class)->name('product.index');
Route::get('/customers',Customers::class)->name('customers.index');
Route::get('/vendors',Vendors::class)->name('vendors.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('cuscus',CustomerController::class);
});
