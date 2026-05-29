<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class Mahasiswacontroller extends Controller
{
    public function index()
    {
        $data = mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }
    public function edit($id)
    {
        $m = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('m'));
    }
    public function update(Request $request, $id)
    {
        Mahasiswa::find($id)->update($request->all());
        return redirect('/mahasiswa');
    }
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect('/mahasiswa');
    }
}
