<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    /** @use HasFactory<\Database\Factories\KeuanganFactory> */
    use HasFactory;

    protected $fillable = [
        'jenis',
        'keterangan',
        'jumlah',
        'tanggal',
    ];

    public function laporan()
    {
        return $this->hasMany(LaporanKeuangan::class, 'keuangan_id');
    }
}
