<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');
        $permissions = [

            'role-list',

            'role-create',

            'role-edit',

            'role-delete',

            'view-settings'

        ];

        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);

        }
    }
}
