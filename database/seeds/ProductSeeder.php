<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            [
                'category_id' => 1,
                'name' => 'Марио',
                'price' => rand(400, 600),
                'description' => 'Куриная грудка, охотничьи колбаски, Дор Блю,сладкий перец, шпинат, томатный и сливочный соус.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Мясное ассорти',
                'price' => rand(400, 600),
                'description' => 'Томатный соус, карбонат в/к, бекон, салями, куриная грудка, томат, сладкий перец, сладкий лук, зелень.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Охотничья ассорти',
                'price' => rand(400, 600),
                'description' => 'Охотничьи колбаски, маринованные огурчики, обжаренные с луком грибы, томатный соус, зелень.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Пепперони',
                'price' => rand(400, 600),
                'description' => 'Пикантные колбаски Пепперони с моцареллой Гальбани на томатном соусе.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'С белыми грибами',
                'price' => rand(400, 600),
                'description' => 'Грибы шампиньоны и белые обжаренные с луком на сливочном соусе с Рукколой и моцареллой Гальбани.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'С ветчиной',
                'price' => rand(400, 600),
                'description' => 'Карбонат в/к, бекон, сладкий перец, маслины, красный лук, томатный соус, зелень.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'С креветками и рукколой',
                'price' => rand(400, 600),
                'description' => 'На томатном соусе со свежей рукколой, моцареллой Гальбани и соусом Песто.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'С лососем',
                'price' => rand(400, 600),
                'description' => 'Сливочный соус, филе семги, маслины, лимон, базиликовое масло.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'С цыпленком барбекью',
                'price' => rand(400, 600),
                'description' => 'Куриная грудка, томат, сладкий перец, томатный соус, зелень, соус Барбекью.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'С цыпленком и грибами',
                'price' => rand(400, 600),
                'description' => 'Куриная грудка, бекон, обжаренные с луком шампиньоны, красный лук, сливочный соус, зелень.',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'С цыпленком и рукколой',
                'price' => rand(400, 600),
                'description' => 'На сливочном соусе с томатами Черри и сыром Грано Падано',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'category_id' => 1,
                'name' => 'Стафф пицца',
                'price' => rand(400, 600),
                'description' => 'Закрытая пицца с запеченной шейкой, карбонатом, куриным филе, сладким перцем, грибами и томатами. ',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
        ]);
    }
}
