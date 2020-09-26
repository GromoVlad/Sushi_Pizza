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
                'name_db' => 'pizza',
                'image' => 'category/c7BNKsC1SaRnLdlMsssggGBHMxM50TFe3A1voU3W.png',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Сеты',
                'name_db' => 'sets',
                'image' => 'category/4rI1xmm0eoSLWybB3KLPiM1iM53UtvRudbhav34V.png',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Мини сеты',
                'name_db' => 'mini_sets',
                'image' => 'category/wYqy0mY5jU92WsQbho5XcpHmpXcnxjK1oo0nv3jc.png',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Роллы',
                'name_db' => 'rolls',
                'image' => 'category/LJKd288jwiDfhgkJ6tAYRa3Vd9z43Q3BXAiFizzo.png',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Обжаренные роллы',
                'name_db' => 'hot_rolls',
                'image' => 'category/tsLvGJVn5X7pWIsBSyokAHpZ5W72I4rQin2THQA3.png',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
        ]);
    }
}
