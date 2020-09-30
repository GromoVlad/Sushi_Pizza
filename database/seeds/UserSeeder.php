<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'vikkiners@yandex.ru',
                'is_admin' => true,
                'password' => '$2y$10$jFFh4Kp.M438PdyE1QXP.O8tFiQZVOgYHQ.eog.yTk1rfl8f.Bt.u', //wc3tft77
                'address' => null,
                'phone' => null,
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ],
            [
                'name' => 'Vlad',
                'email' => 'vlad@mail.ru',
                'is_admin' => false,
                'password' => '$2y$10$jFFh4Kp.M438PdyE1QXP.O8tFiQZVOgYHQ.eog.yTk1rfl8f.Bt.u', //wc3tft77
                'address' => 'ул. Вильямса, д. 12 а, кв. 121',
                'phone' => '89997960571',
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ]
        ]);
    }
}


