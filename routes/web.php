<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('home');
//});

Route::get('/', HomeController::class);


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return "<h1>Logout</h1>";
});

//Route::get('/catalog', function () {
    //return view('catalog.index');
//});

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

//Route::get('/catalog/create', function () {
    //return view('catalog.create');
//});

Route::get('/catalog/create', [CatalogController::class, 'create'])->name('catalog.create');

Route::post('/catalog/create', [CatalogController::class, 'store'])->name('catalog.store');

Route::get('/catalog/new', [CatalogController::class, 'new'])->name('catalog.new');

Route::get('/catalog/show/{id}', [CatalogController::class, 'show'])->name('catalog.show');

// Route::get('/catalog/show/{id}', function ($id) {
//     return view('catalog.show' , ["id" => $id]);
// });

Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit'])->name('catalog.edit');
Route::put('/catalog/update/{id}', [CatalogController::class, 'update'])->name('catalog.update');


// Route::get('/catalog/edit/{id}', function ($id) {
//     return view('catalog.edit', ["id" => $id]);
// });



