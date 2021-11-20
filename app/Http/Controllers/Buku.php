<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class Buku extends Controller
{
    public function tampilkanDataBuku()
    {
        $model = BukuModel::all();
        return view('daftar-buku')->with(
            ['model' => $model]
        );
    }

    public function formBuku()
    {
        return view('form-buku');
    }

    public function simpanBuku(Request $request)
    {
        $model = new BukuModel;
        $model->judul = $request->judul;
        $model->jumlah = $request->jumlah;
        $model->save();
        return redirect(route('buku'));
    }

}
