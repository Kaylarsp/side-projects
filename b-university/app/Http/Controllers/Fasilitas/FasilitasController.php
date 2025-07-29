<?php

namespace App\Http\Controllers\Fasilitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;

class FasilitasController extends Controller
{
    public function index() {
        $facilities = Facility::all();

        return view('fasilitas', compact('facilities'));
    }
}
