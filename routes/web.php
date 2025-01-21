<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::match(['POST'], '/', function (Request $request) {
    if ($request->isMethod('POST')) {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'NIK' => 'required|numeric|digits:16',
            'alamat' => 'required|string|max:500',
            'telepon' => 'required|numeric',
            'email' => 'required|email',
        ]);

        // Simpan data atau proses lainnya
        return redirect('/')->with('success', 'Data berhasil dikirim!');
    }
    return view('welcome');
});
