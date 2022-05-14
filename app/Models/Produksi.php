<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;

    private $table = "produksi";

    private $fillable = [
        'id_produksi',
        'id_pesanan',
        'id_barang',
        'jumlah_produksi',
        'lead_time'
    ];
}
