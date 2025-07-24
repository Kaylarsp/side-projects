<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use App\Models\Cooperation;
use App\Models\Rektor;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index() {
        $cooperationImg = Cooperation::all();
        $rectors = Rektor::all();
        $abouts = AboutMe::all();
        $announcements = Announcements::latest()->take(3)->get();
        $news = News::latest()->get();

        return view('landing', compact('cooperationImg', 'abouts', 'rectors', 'announcements', 'news'));
    }
}
