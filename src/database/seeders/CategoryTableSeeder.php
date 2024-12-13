<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category' => 'Esporte'],
            ['category' => 'Política']
        ];

        foreach ($categories as $key => $category) {
            Categories::create($category);
        }
    }
}
