<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Jenis;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::all();
        return view("home.barang.index" ,compact('barang'));

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $jenis = jenis::all();
    return view('home.barang.tambah' ,compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'gambar'=> 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_barang'=> 'required|min:5',
            'id_jenis'=> 'required|numeric',
            'harga_beli'=> 'required|numeric',
            'harga_jual'=> 'required|numeric',
            'stok'=> 'required|numeric',
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/products', $image->hashName());

        Barang::create([
            'gambar'=> $image->hashName(),
            'nama_barang'=> $request->nama_barang,
            'id_jenis'=> $request->id_jenis,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok,

        ]);

        return redirect('/barang')->with('success','Barnag berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     $barang = barang::find($id);
    return view('home.barang.edit', compact('barang'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $barang= barang::find($id);
    $barang->update($request->all());
    return redirect('/barang')->with('success','');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        barang::find($id)->delete();
        return redirect('/barang')->with('success','');
    }
}
