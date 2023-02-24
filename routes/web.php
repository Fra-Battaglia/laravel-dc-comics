<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController as ComicsController;
use App\Http\Controllers\PagesController as PagesController;
use App\Models\Comic as Comic;

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

Route::get('/', [PagesController::class, 'index'])->name('homepage');

Route::resource('/comics', ComicsController::class);

Route::get('/comic-detail/{id}', function($id) {
    $comics = Comic::all();
    $pages = config('comics.pages');
    $detail = '';
    foreach($comics as $key => $item) {
        if($id == $key) {
            $detail = $item;
        }
    }

    return view('comic-detail', compact('comics', 'pages', 'detail'));
})->name('comic-detail');