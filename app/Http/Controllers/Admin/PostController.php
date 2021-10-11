<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RahulHaque\Filepond\Facades\Filepond;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $m = Post::select('id', 'judul', 'created_at', 'updated_at')->with('kategori')
            ->get();

        // $d = $user = Post::select('id', 'judul', 'created_at', 'updated_at')
        //     ->with('kategori', fn ($query) =>
        //     $query->select('id', 'nama'))->get();

        // dd($users);
        return view('admin/post/post',[
            'post' => Post::with('kategori')->orderByDesc('id')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin/post/tambah',[
            'kategori' => Kategori::all()
        ]);
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
            'kategori_id' => 'required',
            'judul' => ['required', 'unique:post'],
            'isi' => ['required'],
            'gambar' => ['required', 'file', 'max:1024', 'mimes:jpg,jpeg,png', 'mimetypes:image/jpg,image/jpeg,image/png'],
        ],[
            'kategori_id.required' => 'Harus diisi!',
            'judul.required' => 'Harus diisi!',
            'judul.unique' => 'Sudah pernah ada!',
            'isi.required' => 'Harus diisi!',
            'gambar.required' => 'Harus diisi!',
            'gambar.mimes'=> 'Harus berformat jpg, jpeg, dan png!',
            'gambar.mimetype'=> 'Format tersebut disamarkan dengan ekstensi jpg, jpeg, dan png!!',
            'gambar.max' => 'Ukuran tidak boleh lebih dari 1mb!' 
        ]);
        $gambar = $request->gambar;
        $nama_gambar = Storage::put('post', $gambar, 'public');

        // dd($nama_gambar);
        
        ///cara pertama buat input ke database
        $post = new Post;
        $post->kategori_id = $request->kategori_id;
        $post->judul = $request->judul;
        $post->isi = $request->isi;
        $post->gambar = $nama_gambar;
        $post->slug =  Str::slug($request->judul, '-');
        $post->status =  $request->status ?? 1;
        $post->save();
        return redirect('/posting')->with('sukses', 'Post berhasil ditambahkan!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin/post/detail',[
            'detail' => $post,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin/post/ubah',[
            'post' => $post,
            'kategori' => Kategori::all()
        ]);

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
        
        $request->validate([
            'kategori_id' => 'required',
            'judul' => ['required', 'string', 'unique:post,judul,'.$id.',id'],
            'isi' => ['required'],
        ],[
            'kategori_id.required' => 'Harus diisi!',
            'judul.required' => 'Harus diisi!',
            'judul.unique' => 'Sudah pernah ada!',
            'isi.required' => 'Harus diisi!',
        ]);

        // $isi_lama = Post::find($id)->get();

        // $decode_isi = htmlspecialchars_decode($isi_lama['isi']);
        
        $post = Post::find($id);
        $post->kategori_id = $request->kategori_id;
        $post->judul = $request->judul;
        $post->isi = $request->isi;
        $post->gambar = 'mmmmm';
        $post->slug =  Str::slug($request->judul, '-');
        $post->status =  $request->status ?? 1;
        $post->save();
        
        return redirect('/posting')->with('sukses', 'Post berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Post::destroy($request->input('id-hapus'));
        return redirect('/posting')->with('sukses', 'Post berhasil dihapus!');
        
    }
}
