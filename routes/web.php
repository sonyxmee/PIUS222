<?php

use App\Http\Controllers\CategoryWithCodeController;
use App\Models\Banner;
use App\Models\Category;
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

//Route::get('/', function () {
////    return view('welcome');
//
//    $categories = \App\Models\Category::all();
//    $banners = \App\Models\Banner::all();
//
//    foreach ($categories as $category) {
//        echo 'Category name: ' . $category['title'] . '<br>';
//        echo '<b>Banners: </b><br>';
//        foreach ($category->banners as $banner) {
//            echo $banner['title'] . '<br>';
//        }
//        echo '---------------------------------<br>';
//
//
//    }
//});
////->take(5)
//$banners = Banner::orderBy('created_at')->orderBy('active')->orderBy('active_from')->orderBy('active_to')->get();
//Route::get('/category/{code}', function ($code) {
//    $category = Category::find($code);
//    if ($category->active) {
//        echo 'Category name: ' . $category['title'] . '<br>';
//        echo '<b>Banners: </b><br>';
//
//        foreach ($category->banners as $banner) {
//            echo 'ID: ' . $banner['id'] . ' Title: ' . $banner['title'] . ' Active: ' . $banner['active'] . ' Created at: ' . $banner['created_at'] . '<br>';
//        }
//        echo '---------------------------------<br>';
//    } else {
//        //dd($query->active);
//        abort(404); //$query->title;
//    }
//});

Route::get('/category/{code}', CategoryWithCodeController::class);
