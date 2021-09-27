<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Route::resource('products', 'ProductController');


Route::put('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::post('products', 'ProductController@store')->name('products.store');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([])->group(function(){
    
//     Route::prefix('admin')->group(function(){
        
//         Route::namespace('Admin')->group(function(){

//             Route::name('admin.')->group(function(){

//                 Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
    
//                 Route::get('/financeiro', 'TesteController@teste2')->name('afinanceiro');
    
//                 Route::get('/produtos', 'TesteController@teste')->name('products');

//             Route::get('/', function(){
//                 return redirect()->route('admin.dashboard');
//             })->name('home');
//             });
//         });
//     });

// });

