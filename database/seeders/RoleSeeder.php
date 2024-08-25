<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $role = [
            ['nama' => 'Admin'],
            ['nama' => 'Guru Mata Pelajaran'],
            ['nama' => 'Guru Wali Kelas'],
            ['nama' => 'Orang Tua'],
            ['nama' => 'Peserta Didik'],
        
        ];
        
        DB::table('roles')->insert($role);

        $module = [
            ['nama_module' => 'anggota'],
            ['nama_module' => 'info_workspace'],
            ['nama_module' => 'kelas'],
            ['nama_module' => 'mata_pelajaran'],
        ];

        DB::table('module_page')->insert($module);
    }
}
