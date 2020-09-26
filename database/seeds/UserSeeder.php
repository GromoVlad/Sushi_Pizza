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
                'created_at' => date_create(),
                'updated_at' => date_create(),
            ]
        ]);
    }
}


