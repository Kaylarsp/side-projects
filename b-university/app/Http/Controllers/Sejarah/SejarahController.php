<?php

namespace App\Http\Controllers\Sejarah;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index() {
        $histories = History::all();
        return view('sejarah', compact('histories'));
    }
}
