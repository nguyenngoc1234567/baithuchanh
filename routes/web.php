<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
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
Route::get('/', function () {
    echo "<h2>This is Home page</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is About page</h2>";
});

Route::get('/contact', function () {
    echo "<h2>This is Contact page</h2>";
});
Route::get('/user', function () {
    return view('user', ['name'=>'Masud Alam']);
});
Route::get('/user-name/{name?}', function ($name = 'Sohel') {
    echo "<h2>User name is $name</h2>";
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('bai_tap', function () {
    return view('bai_tap');
});
Route::post('bai_tap', function (Illuminate\Http\Request $request) {
    $productDescription = $request->input('productDescription');
    $discountPrice = $request->input('discountPrice');
    $discountPercent =  $request->input('discountPercent');
    $discountAmount = $discountPrice * $discountPercent * 0.1;
    return view('baitap', compact(['discountAmount', 'discountPercent', 'productDescription']));
});
Route::get('create', [PostController::class,'create']);
Route::post('store', [PostController::class,'store'])->name('store');
Route::get('custom-validation', [FormController::class, 'checkValidation'])->name('form.submit');
