<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKemasjidan extends Model
{
    /** @use HasFactory<\Database\Factories\AnggotaKemasjidanFactory> */
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jadwalImam()
    {
        return $this->hasMany(JadwalImam::class, 'imam_id');
    }
}
