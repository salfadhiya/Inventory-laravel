<?php

namespace App\Http\Controllers;
use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\Supplier;

use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $barangMasuk = BarangMasuk::all();
    return view("home.barang_masuk.index" , compact('barangMasuk') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $barang = Barang::all();
    $supplier = Supplier::all();
     return view("home.barang_masuk.tambah" , compact("barang", "supplier") );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    BarangMasuk::create($request->all());
    return redirect("/barang_masuk")->with("success","");
    }

}
