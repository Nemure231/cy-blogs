<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/kategori/kategori',[
            'kategori' => Kategori::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'unique:kategori'],

        ],[
            'nama.required' => 'Harus diisi!',
            'nama.unique' => 'Sudah pernah ada!'
        ]);

        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->slug =  Str::slug($request->nama, '-');
        $kategori->save();
        return redirect('/kategori')->with('sukses', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('ubah-id');
        
        $request->validate([
            'ubah-nama' => ['required', 'unique:kategori,nama,'.$id.',id'],

        ],[
            'ubah-nama.required' => 'Harus diisi!',
            'ubah-nama.unique' => 'Sudah pernah ada!'
        ]);
        $nama = $request->input('ubah-nama');
        $kategori = Kategori::find($id);
        $kategori->nama = $nama;
        $kategori->slug =  Str::slug($nama, '-');
        $kategori->save();
        return redirect('/kategori')->with('sukses', 'Kategori berhasil diubah!');
    }

  
    public function destroy(Request $request)
    {
        Kategori::destroy($request->input('id-hapus'));
        return redirect('/kategori')->with('sukses', 'Kategori berhasil dihapus!');
    }
}
