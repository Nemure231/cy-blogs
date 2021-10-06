<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/auth/regist/regist',[
            
        ]);
    }

    public function store(Request $request)
    {
      

        // dd($request->all());
        $tervalidasi = $request->validate([
            //format penulisan validasi 1
            'nama' => 'required|unique:users,name',
            //format penulisan validasi 2
            'surel' => ['required', 'email', 'unique:users,email'],
            'sandi' => ['required', 'confirmed', 'min:8'],
        ],[
            'nama.required' => 'Harus diisi!',
            'nama.unique' => 'Sudah pernah ada!',
            'surel.required' => 'Harus diisi!',
            'surel.email' => 'Harus berformat surel!',
            'surel.unique' => 'Sudah pernah ada!',
            'sandi.required' => 'Harus diisi!',
            'sandi.min' => 'Tidak boleh kurang dari :min karakter!',
            'sandi.confirmed' => 'Konfirmasi sandi harus sama!'
        ]);

        ///cara pertama buat input ke database
        $user = new User;
        $user->name = $request->nama;
        $user->email = $request->surel;
        $user->password = Hash::make($request->sandi);
        $user->save();

        ///cara ke 2
        //definisikan dulu tervalidasi di samping validasi, lalu definisikan di bawah ini
        //tai ingat ini hanya berlau jika name dan databasenya sama misal nama dengan nama, tidak name dengan nama
        // $tervalidasi['sandi'] = Hash::make($tervalidasi['sandi']);
        // User::create($tervalidasi);
        return redirect('/login')->with('sukses', 'Registrasi berhasil! Silakan periksa surel Anda untuk melakukan aktifasi.');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
