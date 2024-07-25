<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    public function run()
    {
        Categorie::create([
            'name' => 'Plomeria',
            'description' => 'Category for Plomeria',
            'status' => true
        ]);

        Categorie::create([
            'name' => 'Electricidad',
            'description' => 'Category for Electricidad',
            'status' => false
        ]);

        Categorie::create([
            'name' => 'Refrigeracion',
            'description' => 'Category for Refrigeracion',
            'status' => true
        ]);
        Categorie::create([
            'name' => 'Informática',
            'description' => 'Category for Informática',
            'status' => true
        ]);

        Categorie::create([
            'name' => 'Pintura',
            'description' => 'Category for books',
            'status' => true
        ]);

    }
}

