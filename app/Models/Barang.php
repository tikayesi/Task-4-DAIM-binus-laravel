<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    private $table = "barang";

    private $fillable = [
        'id_barang',
        'nama_barang'
    ];
}
