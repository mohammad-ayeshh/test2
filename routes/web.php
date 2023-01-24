<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\test1;

use App\Http\Controllers\Computeres;



Route::get('/', [test1::class, 'index'])-> name('home.index');
Route::get('/about', [test1::class, 'about'])-> name('home.about');
Route::get('/contact', [test1::class, 'contact'])-> name('home.contact');

//Route::get('/computers', [Computeres::class, 'index'])-> name('computers.index');
Route::resource('computers', Computeres::class);

/* 

Route::get('/', function () {
    return view('welcome');
});


Route::get('/koko', function () {
    return view('koko') ;
});


Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    return 'why are u typing '.$category.'  '.$item.'  are u okay????' ;
});


Route::get('/store', function () {
    $filter = request('style') ;
    return 'why are u typing '.$filter.'are u okay????' ;
});
 */