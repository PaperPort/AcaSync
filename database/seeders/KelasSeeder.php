<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detailKelas = [
            [
                'kode_kelas'    => Str::random(8),
                'nama'          => 'X RPL 1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'kode_kelas'    => Str::random(8),
                'nama'          => 'X RPL 2',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'kode_kelas'    => Str::random(8),
                'nama'          => 'XI RPL 1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'kode_kelas'    => Str::random(8),
                'nama'          => 'XII RPL 2',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'kode_kelas'    => Str::random(8),
                'nama'          => 'XII RPL 1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ];

        DB::table('detail_kelas_workspace')->insert($detailKelas);

        $kw = [
            [
                'workspace_id'      => 1,
                'detailKelas_id'    => 1,
                'waliKelas_id'      => 3,
            ],
            [
                'workspace_id'      => 1,
                'detailKelas_id'    => 2,
                'waliKelas_id'      => 4,
            ],
            [
                'workspace_id'      => 1,
                'detailKelas_id'    => 3,
                'waliKelas_id'      => 5,
            ],
            [
                'workspace_id'      => 1,
                'detailKelas_id'    => 4,
                'waliKelas_id'      => 6,
            ],
            [
                'workspace_id'      => 1,
                'detailKelas_id'    => 5,
                'waliKelas_id'      => 7,
            ],
        ];
        DB::table('kelas_workspace')->insert($kw);

        $joinKelas = [
            [
                'kelasWorkspace_id' => 1,
                'userWorkspace_id'  => 7
            ],
            [
                'kelasWorkspace_id' => 1,
                'userWorkspace_id'  => 8
            ],
            [
                'kelasWorkspace_id' => 1,
                'userWorkspace_id'  => 9
            ],
        ];
        DB::table('join_kelas_workspace')->insert($joinKelas);
    }
}
