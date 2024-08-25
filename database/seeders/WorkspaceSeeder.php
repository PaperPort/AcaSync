<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WorkspaceSeeder extends Seeder
{
    public function run(): void
    {
        $workspace = [
            [
                'user_id'   => 1,
                'alamat'    => 'Jl. Wijaya Kusuma No.46, Mojopanggung, Giri',
                'provinsi'  => 'Jawa Timur',
                'kabupaten' => 'Banyuwangi',
                'kode_akses'=> Str::random(16),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'user_id'   => 2,
                'alamat'    => 'Jl. Jenderal Ahmad Yani No.80, Taman Baru',
                'provinsi'  => 'Jawa Timur',
                'kabupaten' => 'Banyuwangi',
                'kode_akses'=> Str::random(16),
                'created_at'=> now(),
                'updated_at'=> now()
            ],
        ];

        DB::table('workspaces')->insert($workspace);

        $rw = [
            [
                'workspace_id'  => 1,
                'role_id'       => 1,
            ],
            [
                'workspace_id'  => 1,
                'role_id'       => 2,
            ],
            [
                'workspace_id'  => 1,
                'role_id'       => 3,
            ],
            [
                'workspace_id'  => 1,
                'role_id'       => 4,
            ],
            [
                'workspace_id'  => 1,
                'role_id'       => 5,
            ],
            [
                'workspace_id'  => 2,
                'role_id'       => 1,
            ],
            [
                'workspace_id'  => 2,
                'role_id'       => 2,
            ],
            [
                'workspace_id'  => 2,
                'role_id'       => 3,
            ],
            [
                'workspace_id'  => 2,
                'role_id'       => 4,
            ],
            [
                'workspace_id'  => 2,
                'role_id'       => 5,
            ],
        ];
        
        DB::table('role_workspace')->insert($rw);

        $detailUs = [
            [
                'nomor_induk'   => 26981098,
                'tahun_ajaran'  => '2024',
                'is_active'     => '1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nomor_induk'   => 98743910,
                'tahun_ajaran'  => '2024',
                'is_active'     => '1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nomor_induk'   => 898207812,
                'tahun_ajaran'  => '2024',
                'is_active'     => '1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nomor_induk'   => 674921982,
                'tahun_ajaran'  => '2024',
                'is_active'     => '1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nomor_induk'   => 821918206,
                'tahun_ajaran'  => '2024',
                'is_active'     => '1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nomor_induk'   => 615291201,
                'tahun_ajaran'  => '2024',
                'is_active'     => '1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nomor_induk'   => 971910283,
                'tahun_ajaran'  => '2024',
                'is_active'     => '1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'nomor_induk'   => 762381921,
                'tahun_ajaran'  => '2024',
                'is_active'     => '1',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ];

        DB::table('detail_users_workspace')->insert($detailUs);

        $uswk = [
            [
                'workspace_id'  => 1,
                'user_id'       => 1,
                'detailUser_id' => null,
                'rw_id'         => 1,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 1,
                'user_id'       => 3,
                'detailUser_id' => 1,
                'rw_id'         => 3,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 1,
                'user_id'       => 4,
                'detailUser_id' => 2,
                'rw_id'         => 3,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 1,
                'user_id'       => 5,
                'detailUser_id' => 3,
                'rw_id'         => 3,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 1,
                'user_id'       => 6,
                'detailUser_id' => 4,
                'rw_id'         => 3,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 1,
                'user_id'       => 7,
                'detailUser_id' => 5,
                'rw_id'         => 3,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 1,
                'user_id'       => 8,
                'detailUser_id' => 6,
                'rw_id'         => 5,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 1,
                'user_id'       => 9,
                'detailUser_id' => 7,
                'rw_id'         => 5,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 1,
                'user_id'       => 10,
                'detailUser_id' => 8,
                'rw_id'         => 5,
                'akun_terkait'  => null
            ],
            [
                'workspace_id'  => 2,
                'user_id'       => 2,
                'detailUser_id' => null,
                'rw_id'         => 1,
                'akun_terkait'  => null
            ]
        ];

        DB::table('users_workspace')->insert($uswk);
    }
}
