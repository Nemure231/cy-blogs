<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $table = 'post';
    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    //cara penulisan query scope harus diawali dengan sqope
    //lalu baru nama scopernya misal scopeFilter
    public function scopeFilter($query, array $filters){
    
        //query when dipakai untuk mendefinisikan kondisi antara false dan true di query
        //dan ini menggunkana cara callbback menggunakan kurung bengkok
        $query->when($filters['cari'] ?? false, function($query, $cari) {
            return $query->where('judul', 'like', '%' . $cari. '%')
            ->orWhere('isi', 'like', '%' . $cari. '%');
        });

        //ini menggunakan versi arrow buat mengeksekusinyA
        $query->when($filters['kategori'] ?? false, fn($query, $kategori) =>
            $query->whereHas('kategori', fn($query) =>
                $query->where('slug', $kategori)
            )
        );
    }
}
