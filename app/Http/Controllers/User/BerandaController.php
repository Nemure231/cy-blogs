<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class BerandaController extends Controller
{
    public function index()
    {
        return view('user/beranda/main',[
            //filter di sini pake query scope yaitu query terpisah
            //yang dapat digunakan kapan saja, atau sering
            //dan berada di dalam modal post
            'post' => Post::with('kategori')->latest()->filter(request(['cari', 'kategori']))->paginate(9)->withQueryString(),
            'kategori' => Kategori::all()
        ]);
    }

    
    public function show(Post $post){
        return view('user/beranda/detail',[
            'detail' => $post,
            'kategori' => Kategori::all()
        ]);
    }
}
