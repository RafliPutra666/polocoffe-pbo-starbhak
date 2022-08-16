<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable =[
        'menu_id',
        'nomor_meja',
        'jumlah_pesan',
        'total',
        'tanggal_pesan',
    ];
}
