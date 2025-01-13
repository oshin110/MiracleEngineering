<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    /** @use HasFactory<\Database\Factories\ProyekFactory> */
    use HasFactory;

    protected $table = 'proyek';

    protected $fillable = [
        'nama_proyek',
        'harga_minimum',
        'harga_maksimum',
        'ukuran',
    ];
}
