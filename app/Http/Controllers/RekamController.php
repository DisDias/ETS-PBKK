<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekam;

class RekamController extends Controller
{
    public function index()
    {
        return view('rekam', [
            "title" => "All Rekams",
            //"name" => "Dias Kurniasari",
            //"email" => "diaskurniasari2@gmail.com",
            //"posts" => Post::all()
            "rekams" => Rekam::with(['pasien', 'dokter'])->latest()->get()
        ]);
    }

    public function content(Rekam $rekam){
        return view('konten', [
            "rekam" => $rekam
        ]);
    }
}
