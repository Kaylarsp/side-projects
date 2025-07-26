<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        $berita = News::where('slug', 'berita')->first();
        return view('berita.show', compact('berita'));
    }
}
