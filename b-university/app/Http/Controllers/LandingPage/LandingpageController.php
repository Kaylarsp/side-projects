<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use App\Models\Cooperation;
use App\Models\Rektor;
use App\Models\Announcement;
use App\Models\News;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index() {
        $cooperationImg = Cooperation::all();
        $rectors = Rektor::all();
        $abouts = AboutMe::all();
        $announcements = Announcement::latest()->take(3)->get();
        $news = News::latest()->take(3)->get();

        return view('landing', compact('cooperationImg', 'abouts', 'rectors', 'announcements', 'news'));
    }
}
