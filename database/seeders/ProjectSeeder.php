<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'Proyecto 1',
                'description' => 'Descripción del proyecto 1',
                'status' => 'Activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Proyecto 2',
                'description' => 'Descripción del proyecto 2',
                'status' => 'En progreso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Proyecto 3',
                'description' => 'Descripción del proyecto 3',
                'status' => 'Finalizado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
