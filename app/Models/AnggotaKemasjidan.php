<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKemasjidan extends Model
{
    /** @use HasFactory<\Database\Factories\AnggotaKemasjidanFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'kontak',
        'alamat',
        'peran',
    ];
}
