<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class PagesController extends Controller
{
    public function index() {
        $pages = config('comics.pages');
        return view('comics', compact('pages'));
    }
}
