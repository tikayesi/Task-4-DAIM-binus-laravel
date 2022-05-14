<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengambilan extends Model
{
    use HasFactory;
    private $table = "pengambilan";

    private $fillable = [
        'id_pengambilan',
        'nama_pengambil',
        'id_barang',
        'jumlah_pengambilan'
    ];
}
