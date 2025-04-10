<?php

namespace Database\Seeders;

use App\Models\Komentar;
use Illuminate\Database\Seeder;

class KomentarSeeder extends Seeder
{
    public function run(): void
    {
        Komentar::create([
            'username' => 'andi',
            'pesan' => 'Halo ini komentar pertama!'
        ]);
        Komentar::create([
            'username' => 'budi',
            'pesan' => 'Komentar kedua hadir...'
        ]);
    }
}

