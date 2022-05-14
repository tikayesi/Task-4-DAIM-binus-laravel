<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    private $table = "pemesanan";

    private $fillable = [
        'id_pesanan',
        'nama_pemesan',
        'id_barang',
        'jumlah_pesanan',
        'proses'
    ];
}
