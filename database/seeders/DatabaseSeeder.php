<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Activity;
use App\Models\AnggotaKemasjidan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DataKeuangan;
use App\Models\Donasi;
use App\Models\InvestarisMajid;
use App\Models\JadwalImam;
use App\Models\Keuangan;
use App\Models\LaporanKeuangan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Masura Dani Quthni',
            'email' => 'D@gmail.com',
            'password' => Hash::make('1'),
        ]);
        $user = User::factory(9)->create();
        $donasi = Donasi::factory(10)->create();
        $anggotaKemasjidan = AnggotaKemasjidan::factory(10)->create();
        $jadwalImam = JadwalImam::factory(10)->create();
        $laporanKeuangan = LaporanKeuangan::factory(10)->create();
        $keuangan = Keuangan::factory(10)->create();
        $investaris = InvestarisMajid::factory(10)->create();

        


        foreach
         ($donasi as $data){
            $data->update([
                'user_id' => User::all()->random()->id,
            ]);
        }

        foreach
         ($laporanKeuangan as $data){
            $data->update([
                'total_pemasukan_id' => Donasi::all()->random()->id,
                'keuangan_id' => Keuangan::all()->random()->id,
            ]);
        }

        foreach
         ($anggotaKemasjidan as $data){
            $data->update([
                'user_id' => User::all()->random()->id,
            ]);
        }

        foreach
         ($jadwalImam as $data){
            $data->update([
                'imam_id' => AnggotaKemasjidan::all()->random()->id,
            ]);
        }

        
    }
}
