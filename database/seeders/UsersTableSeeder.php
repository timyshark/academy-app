<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'timyshark',
            'email' => 'timy.shark@outlook.com',
            'password' => app('hash')->make('secret')
        ]);
        // for ($i=0; $i< 10; $i++){
        //     User::create([
        //         'name' => 'user' . $i,
        //         'email' => 'user' . $i . '@email.com',
        //         'password' => app('hash')->make('secret' . $i),
        //     ]);
        // }
    }
}
