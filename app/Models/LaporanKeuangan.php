<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKeuangan extends Model
{
    /** @use HasFactory<\Database\Factories\LaporanKeuanganFactory> */
    use HasFactory;

    protected $fillable = [
        'tanggal_laporan',
        'total_pemasukan',
        'total_pengeluaran',
        'total_pemasukan_id',
        'keuangan_id',
    ];

    public function donasi()
    {
        return $this->belongsTo(Donasi::class, 'total_pemasukan_id');
    }

    public function keuangan()
    {
        return $this->belongsTo(Keuangan::class, 'keuangan_id');
    }
}
