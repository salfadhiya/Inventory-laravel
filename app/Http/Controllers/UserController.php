<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $user = User::all();
    return view("home.user.index", compact("user"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("home.user.tambah");
    }

    public function store(Request $request)
    {
     User::create($request->all());
      return redirect('/user')->with('success','');
    }

    public function show(string $id)
    {
     $user = User::find($id);
    return view('home.user.edit', compact('user'));
    }


    public function update(Request $request, string $id)
    {
    $user= User::find($id);
    $user->update($request->all());
    return redirect('/user')->with('success','');
    }

    public function destroy(string $id)
    {
    $user = User::find($id)->delete();
    return redirect('/user')->with('success','');
    }
}
