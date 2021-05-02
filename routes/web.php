<?php

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
Route::get('mail', function (\App\Models\Order $order) {
    return view('orderSaved')->with('order', $order->first());
});
Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('product/{slug?}', [\App\Http\Controllers\PageController::class, 'product']);
Route::get('category/{categoryID?}', [\App\Http\Controllers\PageController::class, 'category']);
Route::get('page/{slug?}', [\App\Http\Controllers\PageController::class, 'page']);
Route::post('order', [\App\Http\Controllers\PageController::class, 'order']);
Route::get('ordered', [\App\Http\Controllers\PageController::class, 'ordered']);

/*Route::get('images', function (){
    $fo = getProductImagesPath('eg001');
    foreach ($fo as $f) {
        echo "<img src=$f width='200'/>";
    }
});
Route::get('path', function(){
    return public_path();
});*/
