<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;

use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{

    public function index()
    {
        $barangKeluar = BarangKeluar::all();
        return view('home.barang_keluar.index' , compact('barangKeluar') );
    }

    public function create()
    {
        $barang = Barang::all();
        return view('home.barang_keluar.tambah' , compact('barang') );
    }

    public function store(Request $request)
    {
        BarangKeluar::create($request->all());
        return redirect("/barang_keluar")->with("success","");
    }


}
