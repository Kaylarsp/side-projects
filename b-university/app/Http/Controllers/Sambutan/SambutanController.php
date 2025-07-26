<?php

namespace App\Http\Controllers\Sambutan;

use App\Http\Controllers\Controller;
use App\Models\Greeting;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function index() {
        $greeting = Greeting::all();

        return view('sambutan', compact('greeting'));
    }
}
