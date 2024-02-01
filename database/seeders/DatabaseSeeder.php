<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345'),
            'isAdmin' => true
        ]);

        Pengaduan::create([
            'name' => 'Fernandico',
            'noPelanggan' => '123456',
            'email' => 'fernandico.geovardo01@gmail.com',
            'telepon' => '089626033557',
            'alamat' => 'Jl. Sukabangun 2 Palembang',
            'pengaduan' => 'Bagus',
            'reply' => 'oke'
        ]);

        Pengaduan::create([
            'name' => 'Geovardo',
            'noPelanggan' => '123456',
            'email' => 'fernandico.geovardo01@gmail.com',
            'telepon' => '089626033557',
            'alamat' => 'Jl. Sukabangun 2 Palembang',
            'pengaduan' => 'Bagus'
        ]);
    }
}
