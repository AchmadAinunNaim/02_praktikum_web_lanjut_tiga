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

use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\HalamanProducts;
use App\Http\Controllers\HalamanNews;
use App\Http\Controllers\HalamanProgram;
use App\Http\Controllers\HalamanAboutUs;
use App\Http\Controllers\HalamanContactUs;


Route::get('/', [HalamanHome::class, 'index']);

//--Route Prefix Category----//
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', [HalamanProducts::class, 'med']);
    Route::get('/riri-story-books', [HalamanProducts::class, 'rsb']);
    Route::get('/kolak-kids-songs', [HalamanProducts::class, 'kks']);
    Route::get('/marbel-and-friends-kids-games', [HalamanProducts::class, 'mfkg']);
});

//--Route Param News--//
Route::get('/news', [HalamanNews::class, 'news']);
Route::get('/news/{title}', [HalamanNews::class, 'newstitle']);

//--Route Prefix Program--//
Route::prefix('/program')->group(function(){
    Route::get('/karir', [HalamanProgram::class, 'karir']);

    Route::get('/magang', [HalamanProgram::class, 'magang']);

    Route::get('/kunjunganIndustri', [HalamanProgram::class, 'kunjunganIndustri']);
});

//--Route Biasa About Us--//
Route::get('/about-us',[HalamanAboutUs::class, 'aboutus']);

//--Route Resource Contact--//
Route::resource('/contact-us', HalamanContactUs::class,);
