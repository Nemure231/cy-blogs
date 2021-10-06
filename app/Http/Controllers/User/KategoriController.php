<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        return view('user/kategori/main',[
            'kategori' => Kategori::all()
        ]);
    }
}
