<?php

namespace App\Http\Controllers;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = jenis::all();
        return view("home.jenis.index", compact("jenis"));
    }

    public function create()
    {
        return view('home.jenis.tambah');
    }

    public function store(Request $request)
    {
        jenis::create($request->all());
        return redirect('/jenis')->with('success','');
    }


    public function show($id)
    {
        $jenis = jenis::find($id);
        return view('home.jenis.edit', compact('jenis'));
    }

    public function update(Request $request, $id)
    {
        jenis::find($id)->update($request->all());
        return redirect('/jenis')->with('success','');
    }


}



