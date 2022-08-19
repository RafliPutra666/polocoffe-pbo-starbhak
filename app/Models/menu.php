<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama_menu',
        'gambar_menu',
        'kategori_id',
        'harga',
    ];
    protected $table = 'menu';

    protected function kategori(){
        return $this->belongsTo(kategori::class);
    }
}
