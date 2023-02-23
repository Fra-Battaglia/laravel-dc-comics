<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    public function index() {
        $comics = Comic::all();
        $pages = config('comics.pages');
        return view('index', compact('comics', 'pages'));
    }
}
