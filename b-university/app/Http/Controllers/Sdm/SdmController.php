<?php

namespace App\Http\Controllers\Sdm;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class SdmController extends Controller
{
    public function index() {
        $admins = Admin::all();
        $lecturers = Lecturer::all();
        return view('sdm', compact('admins', 'lecturers'));
    }
}
