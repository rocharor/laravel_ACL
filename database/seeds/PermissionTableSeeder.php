<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        factory(Permission::class)->create([
            'name' => 'edit',
            'label' => 'Editar ....'
        ]);

        factory(Permission::class)->create([
            'name' => 'delete',
            'label' => 'Deletar ....'
        ]);
    }
}
