<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Komik;
use App\Models\Shipping;
use App\Models\User;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Komik::factory(16)->create();

        User::create([
            "username" => "souishi",
            "email" => "souishi@gmail.com",
            "firstname" => "sou",
            "lastname" => "ishikawa", 
            "alamat" => "Jl. uranus no 39",
            "notelp" => "084319475205",
            "password" => bcrypt("password")
        ]);

        Shipping::create([
            "nama" => "JNE Express",
            "estimasi" => "2 hari",
            "harga" => 15000
        ]);
        
        Shipping::create([
            "nama" => "J&T Express",
            "estimasi" => "",
            "harga" => 15000
        ]);

        Shipping::create([
            "nama" => "POS Indonesia",
            "estimasi" => "2 hari",
            "harga" => 14000
        ]);

        Shipping::create([
            "nama" => "SiCepat Express",
            "estimasi" => "1-2 hari",
            "harga" => 15000
        ]);

    }
}
