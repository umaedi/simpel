<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $variable = [
            ['nama_opd'  => 'DPMPTSP'],
            ['nama_opd'  => 'DINAS KESEHATAN'],
            ['nama_opd'  => 'DINAS LINGKUNGAN HIDUP'],
            ['nama_opd'  => 'DINAS PENDIDIKAN'],
            ['nama_opd'  => 'DINAS PERDAGANGAN'],
            ['nama_opd'  => 'DINAS KESBANGPOL'],
            ['nama_opd'  => 'DINAS PUPR'],
        ];

        foreach ($variable as $value) {
            \App\Models\Opd::create($value);
        }
    }
}
