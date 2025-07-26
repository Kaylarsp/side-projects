<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namalengkap'     => 'required|string|max:255',
            'email'           => 'required|email|unique:students,email',
            'jalur'           => 'required|string',
            'image'           => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'namapanggilan'   => 'required|string|max:255',
            'nomor_hp'        => 'required|string|max:15',
            'programstudi_1'  => 'required|string',
            'programstudi_2'  => 'nullable|string',
        ]);

        $fotoName = null;
        if ($request->hasFile('image')) {
            $fotoName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('uploads/student', $fotoName, 'public');

            // Debugging line to check if the file was uploaded successfully
            if (!$path) {
                return redirect()->back()->withErrors(['image' => 'Failed to upload image.']);  
            } 
        }

        // Store the student data in the database
        Student::create([
            'namalengkap'     => $request->namalengkap,
            'email'           => $request->email,
            'jalur'           => $request->jalur,
            'image'           => $fotoName,
            'namapanggilan'   => $request->namapanggilan,
            'nomor_hp'        => $request->nomor_hp,
            'programstudi_1'  => $request->programstudi_1,
            'programstudi_2'  => $request->programstudi_2,
        ]);

        return redirect()->back()->with('success','Pendaftaran berhasil!');
    }
}
