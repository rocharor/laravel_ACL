<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        factory(Role::class)->create([
            'name' => 'sadmin',
            'label' => 'Super Admin'
        ]);

        factory(Role::class)->create([
            'name' => 'admin',
            'label' => 'Admin'
        ]);
    }
}
