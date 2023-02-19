<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Title::create([
            'title' => 'Laravel Developer'
        ]);

        Title::create([
            'title' => 'Senior Laravel Developer'
        ]);

        Title::create([
            'title' => 'API Developer'
        ]);

        Title::create([
            'title' => 'Frontend Developer'
        ]);

        Title::create([
            'title' => 'React Developer'
        ]);

        Title::create([
            'title' => 'Fullstack Engineer'
        ]);
    }
}
