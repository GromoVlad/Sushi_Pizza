<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            [
                'name' => 'Пицца',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Сеты',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Мини сеты',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Роллы',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Обжаренные роллы',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
        ]);
    }
}
