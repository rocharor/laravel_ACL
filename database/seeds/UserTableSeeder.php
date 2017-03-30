<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        factory(User::class)->create([
            'id' => 1,
            'name' => 'User 1',
            'email' => 'user1@teste.com',
            'password' => 'xxx'
        ]);

        factory(User::class)->create([
            'id' => 2,
            'name' => 'User 2',
            'email' => 'user2@teste.com',
            'password' => 'xxx'
        ]);

        factory(User::class)->create([
            'id' => 3,
            'name' => 'User 3',
            'email' => 'user3@teste.com',
            'password' => 'xxx'
        ]);
    }
}
