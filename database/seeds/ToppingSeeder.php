<?php

use App\Models\Topping;
use Illuminate\Database\Seeder;

class ToppingSeeder extends Seeder
{
    public function run()
    {
        Topping::insert([
            [
                'category_id' => 1,
                'name' => 'Цыпленок',
                'price' => 45,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Бекон',
                'price' => 50,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Салями',
                'price' => 55,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Пепперони',
                'price' => 80,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Охотничьи колбаски',
                'price' => 50,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Ветчина',
                'price' => 55,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Сырная основа(моцарелла, сливочный сыр)',
                'price' => 40,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Пармезан',
                'price' => 60,
                'weight' => 25,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Дор блю',
                'price' => 60,
                'weight' => 25,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Тигровая креветка(1 шт)',
                'price' => 40,
                'weight' => 10,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Кальмар',
                'price' => 45,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Филе лосося',
                'price' => 60,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Сладкий перец',
                'price' => 25,
                'weight' => 25,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Перец острый холопенья',
                'price' => 50,
                'weight' => 25,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Маслины',
                'price' => 30,
                'weight' => 25,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Оливки',
                'price' => 30,
                'weight' => 25,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Томат',
                'price' => 40,
                'weight' => 100,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Грибы обжаренные',
                'price' => 40,
                'weight' => 50,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Салат айсберг',
                'price' => 40,
                'weight' => 25,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Салат романо',
                'price' => 40,
                'weight' => 25,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
        ]);
    }
}
