<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            "title"=> "Colocacion de caños de agua",
            "category_id"=> 4,
            "description"=> "Asesoría",
            "image"=> "12398-asdasd-123123.jpg"
        ]);
    }
}
