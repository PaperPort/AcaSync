<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MapelSeeder extends Seeder{
    public function run(): void
    {
        $mapel = [
            [
                'nama'          => 'Matematika',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nama'          => 'Bahasa Indonesia',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nama'          => 'Pemrograman Dasar',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nama'          => 'Bahasa Inggris',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nama'          => 'OOP',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ];
        DB::table('detail_mapel_workspace')->insert($mapel);

        $mapelWorkspace = [
            [
                'workspace_id'      => '1',
                'detailMapel_id'    => '1'
            ],
            [
                'workspace_id'      => '1',
                'detailMapel_id'    => '2'
            ],
            [
                'workspace_id'      => '1',
                'detailMapel_id'    => '3'
            ],
            [
                'workspace_id'      => '1',
                'detailMapel_id'    => '4'
            ],
            [
                'workspace_id'      => '1',
                'detailMapel_id'    => '5'
            ],
        ];
        DB::table('mata_pelajaran_workspace')->insert($mapelWorkspace);

        // $kelasMapel = [
        //     [
        //         'kelasWorkspace_id' => 1,
        //         'mapelWorkspace_id' => 1,
        //         'guruMapel_id'      => 12
        //     ]
        // ];
        // DB::table('kelas_mapel_workspace')->insert($kelasMapel);
    }
}