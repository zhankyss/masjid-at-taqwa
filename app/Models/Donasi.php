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
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pemasukan()
    {
        return $this->hasMany(LaporanKeuangan::class, 'total_pemasukan_id');
    }

    
}
