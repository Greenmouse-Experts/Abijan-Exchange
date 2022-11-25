<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        Permission::create(['name' => 'create-admin']);
        Permission::create(['name' => 'view-users']);
        Permission::create(['name' => 'wallet-request']);
        Permission::create(['name' => 'update-wallet-request']);
        Permission::create(['name' => 'send-request']);
        Permission::create(['name' => 'update-send-request']);
        Permission::create(['name' => 'buy-and-sell']);
        Permission::create(['name' => 'update-buy-and-sell']);
        Permission::create(['name' => 'update-rate']);
        Permission::create(['name' => 'update-settings']);
        Permission::create(['name' => 'view-referrals']);
        Permission::create(['name' => 'support']);
        Permission::create(['name' => 'message-center']);
        Permission::create(['name' => 'set-rate']);
        Permission::create(['name' => 'view-rate']);

        $adminRole = Role::create(['name' => 'Admin']);
        $managerRole = Role::create(['name' => 'Manager']);
        $supportRole = Role::create(['name' => 'Support']);

        /* $adminRole->givePermissionTo([
            'view-users',
            'add-admin',
            'wallet-request',
            'update-wallet-request',
            'send-request',
            'update-send-request',
            'buy-and-sell',
            'update-buy-and-sell',
            'update-rate',
            'update-settings',
            'view-referrals',
            'support',
            'message-center',
            'set-rate',
            'view-rate',
        ]);

        $managerRole->givePermissionTo([
            'view-users',
            'add-admin',
            'wallet-request',
            'send-request',
            'buy-and-sell',
            'view-referrals',
            'support',
            'message-center',
            'view-rate',
        ]);

        $supportRole->givePermissionTo([
            'view-referrals',
            'support',
            'message-center',
        ]); */
    }
}
