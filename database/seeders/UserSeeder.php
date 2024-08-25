<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        $user = [
            [
                'user_id'           => Str::uuid(),
                'name'              => 'SMK Negeri 1 Banyuwangi',
                'email'             => 'smkn1banyuwangi@gmail.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('smkn1bwi'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'STIKOM Banyuwangi',
                'email'             => 'stikombwi@gmail.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('stikombwi'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Shella Febriana Mahardika',
                'email'             => 'shellafebrianamahardika@gmail.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('shellafebriana'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Dicky Mulia Fiqri',
                'email'             => 'dickymulia@gmail.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('dickymulia'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'M. Taufiq',
                'email'             => 'mtaufiq@gmail.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('mtaufiq'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Artawan Prabowo',
                'email'             => 'patricia.maulana@yahoo.co.id',
                'email_verified_at' => now(),
                'password'          => bcrypt('artawan'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Rina Yolanda',
                'email'             => 'nsinaga@prakasa.tv',
                'email_verified_at' => now(),
                'password'          => bcrypt('rina'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Cengkir Sihotang',
                'email'             => 'handayani.jaya@fujiati.ac.id',
                'email_verified_at' => now(),
                'password'          => bcrypt('cengkirsihotang'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Giselle Iacobini',
                'email'             => 'giacobini0@howstuffworks.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('giselle'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Kanya Sheehan',
                'email'             => 'ksheehan1@ucla.edu',
                'email_verified_at' => now(),
                'password'          => bcrypt('kanya'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Trisha Rouchy',
                'email'             => 'trouchy2@fc2.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('trisha'),
                'profile'           => null,
                'created_at'        => now()
            ],
            [
                'user_id'           => Str::uuid(),
                'name'              => 'Letisha Danks',
                'email'             => 'ldanks3@nymag.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('letisha'),
                'profile'           => null,
                'created_at'        => now()
            ],
        ];

        DB::table('users')->insert($user);
    }
}
