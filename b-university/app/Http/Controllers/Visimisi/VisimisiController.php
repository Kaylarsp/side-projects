<?php

namespace App\Http\Controllers\Visimisi;

use App\Http\Controllers\Controller;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index() {
        $visimisi = Visimisi::first();

        if ($visimisi) {
            $visi = $visimisi->visi;
            $misi = $visimisi->misi;
            $visimisiImg = $visimisi->image;
        } else {
            $visi = 'No data available';
            $misi = 'No data available';
            $visimisiImg = [];
        }

        $visimisis = $visimisi;
        
        return view('visimisi', compact('visi', 'misi', 'visimisiImg', 'visimisis'));
    }
}
