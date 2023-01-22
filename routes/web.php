<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminMengaturController;
use App\Http\Controllers\AdminAbout;
use App\Http\Controllers\AdminAsus;
use App\Http\Controllers\AdminTentangController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminInfinix;
use App\Http\Controllers\AdminInformasiController;
use App\Http\Controllers\AdminIphone;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminOppo;
use App\Http\Controllers\AdminSamsung;
use App\Http\Controllers\AdminVivo;
use App\Http\Controllers\AdminXiomi;
use App\Http\Controllers\Home;
use App\Http\Controllers\HomeInfoController;

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

Route::get('/', [Home::class, 'index']);
Route::get('/informasi', [HomeInfoController::class, 'index']);
Route::get('/informasi/detail/{id}', [HomeInfoController::class, 'detail']);





Route::get('/about', function () {
    $data = [
        'content'=> 'home/about/index'
    ];
    return view('home.layouts.wrapper',$data);
});


Route::get('/service', function () {
    $data = [
        'content'=> 'home/service/index'
    ];
    return view('home.layouts.wrapper',$data);
});



Route::get('/blog', function () {
    $data = [
        'content'=> 'home/blog/index'
    ];
    return view('home.layouts.wrapper',$data);
});



Route::get('/contact', function () {
    $data = [
        'content'=> 'home/contact/index'
    ];
    return view('home.layouts.wrapper',$data);
});



Route::get('/login', function () {
    $data = [
        'content'=> 'home/auth/index'
    ];
    return view('home.layouts.wrapper',$data);
});

// Admin
Route::prefix('/admin')->group(function (){
    Route::get('/dasboard', function () {
        $data = [
        'title' => 'dasboard',
        'content'=> 'admin/dasboard/index'
    ];

        return view ('admin.layouts.wrapper', $data);
    });

    
    Route::get('/tentang', [AdminTentangController::class, 'index']);
    Route::put('/tentang/update', [AdminTentangController::class, 'update']);

    Route::resource('/about', AdminAbout::class);
    Route::resource('/kategori', AdminKategoriController::class);

    Route::resource('/user', AdminUserController::class);
    Route::resource('/asus', AdminAsus::class);
    Route::resource('/samsung', AdminSamsung::class);
    Route::resource('/vivo', AdminVivo::class);
    Route::resource('/oppo', AdminOppo::class);
    Route::resource('/xiomi', AdminXiomi::class);
    Route::resource('/iphone', AdminIphone::class);
    Route::resource('/infinix', AdminInfinix::class);







});