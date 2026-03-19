<?php

namespace Database\Seeders;

use App\Models\MentorModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MentorModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MentorModel::factory()->count(10)->create();
    }
}
