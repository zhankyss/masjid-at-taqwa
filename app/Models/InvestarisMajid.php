<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestarisMajid extends Model
{
    /** @use HasFactory<\Database\Factories\InvestarisMajidFactory> */
    use HasFactory;
    
    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'kondisi',
        'keterangan',
    ];
}