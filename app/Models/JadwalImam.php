<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalImam extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalImamFactory> */
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'waktu_shalat',
        'imam_id',
    ];

    public function imam()
    {
        return $this->belongsTo(AnggotaKemasjidan::class, 'imam_id');
    }
}
