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
            ['nama_opd'  => 'MPP'],
            ['nama_opd'  => 'DISDUKCAPIL'],
            ['nama_opd'  => 'POLRES'],
            ['nama_opd'  => 'DINAS KESEHATAN'],
            ['nama_opd'  => 'DISPENDA'],
        ];

        foreach ($variable as $value) {
            \App\Models\Opd::create($value);
        }
    }
}
