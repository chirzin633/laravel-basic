<?php

namespace Database\Seeders;

use App\Models\SiswaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SiswaModel::factory()->count(50)->create();
    }
}
