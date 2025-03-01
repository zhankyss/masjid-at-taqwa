<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    /** @use HasFactory<\Database\Factories\DonasiFactory> */
    use HasFactory;

    protected $fillable = [
        'jenis',
        'jumlah',
        'metode_pembayaran',
    ];
}
