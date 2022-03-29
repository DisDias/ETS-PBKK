<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function input()
    {
        return view('formulir');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
            'kondisi' => 'required|max:250',
            'suhu' => 'required|gte:35|lte:45.5',
            'image' => 'required|mimes:pdf,png,jpg,jpeg|max:2048'
        ]);

        $filename=time().".".$request->image->extension();
        $request->image->move(public_path('post-images'), $filename);
        $request->image = $filename;

        session()->flash('success','Selamat Anda Telah Terdaftar!');
        return view('proses', ['data' => $request]);//->with('success', 'Selamat Anda Telah Terdaftar!');       
    }
}
